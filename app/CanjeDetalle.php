<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CanjeDetalle extends Model
{
    protected $fillable = ['canje_id','material_id','cantidad','monto'];

    public function canje(){
        return $this->belongsTo('App\Canje');
    }

    public function centro(){
        return $this->belongsTo('App\Material');
    }
}
