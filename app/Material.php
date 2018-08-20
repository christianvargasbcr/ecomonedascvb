<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['nombre','imagen','precio','color'];

    public function detalleCanjes(){
        return $this->hasMany('App\CanjeDetalle');
    }
}
