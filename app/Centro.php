<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Centro extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','provincia_id','direccion','telefono','correo','imagen',
    ];

    protected $dates = ['deleted_at'];

    public function provincia(){
        return $this->belongsTo('App\Provincia');
    }

    public function canjes(){
        return $this->hasMany('App\Canje');
    }

    public function usuario(){
        return $this->belongsToMany(
            'App/User',
            'usuario_centro',
            'centro_id',
            'usuario_id'
        )->withTimestamps();
    }
}
