<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canje extends Model
{
    protected $fillable = ['centro_id','cliente_id','total'];

    public function cliente(){
        return $this->belongsTo('App\User');
    }

    public function centro(){
        return $this->belongsTo('App\Centro');
    }

    public function detalleCanjes(){
        return $this->hasMany('App\CanjeDetalle');
    }

}
