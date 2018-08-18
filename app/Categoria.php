<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre'];

    public function cupones(){
        return $this->hasMany('App\Cupon');
    }
}
