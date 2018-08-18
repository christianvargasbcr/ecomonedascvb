<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    protected $fillable = ['nombre','descripcion','precio','categoria_id'];

    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
}
