<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'direccion', 'telefono', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function centro(){
        return $this->belongsToMany(
            'App\Centro',
            'usuario_centro',
            'usuario_id',
            'centro_id'
        )->withTimestamps();
    }

    public function tieneAcceso(array $permissions){
        foreach($this->roles as $role){
            if($role->tieneAcceso($permissions)){
                return true;
            }
        }
        return false;
    }
    public function tieneRol($nombre){
        return $this->role()->where('name',$nombre)->count()==1;
    }

}
