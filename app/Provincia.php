<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    public function centros(){
        return $this->hasMany('App\Centro');
    }
}
