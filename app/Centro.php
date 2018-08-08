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
}
