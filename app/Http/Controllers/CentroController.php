<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroController extends Controller
{
    public function getCentroIndex(){
        return view('admin.centro.index');
    }
}
