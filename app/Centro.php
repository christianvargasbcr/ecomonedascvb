<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    protected $fillable = [
        'name','provincia_id','direccion','telefono','correo','imagen',
    ];

    public function provincia(){
        return $this->belongsTo('App\Provincia');
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
