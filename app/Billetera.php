<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billetera extends Model
{
    protected $fillable = ['saldo_canjes','saldo_compras','saldo_disponible','cliente_id'];

    public function cliente(){
        return $this->belongsTo('App\User');
    }

}
