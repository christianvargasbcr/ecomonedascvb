<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    protected $fillable = [
        'name','id_provincia','direccion','telefono',
    ];

    public function provincia(){
        return $this->belongsTo('App\Provincia');
    }
}
