<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = ['cupon_id','cliente_id'];

    public function cupon(){
        return $this->belongsTo('App\Cupon');
    }

    public function cliente(){
        return $this->belongsTo('App\User');
    }
}
