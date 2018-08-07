<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Centro;
use App\Provincia;

class CentroController extends Controller
{
    public function getCentroIndex(){
        $centros = Centro::with('provincia')->get();
        return view('admin.centro.index', ['centros'=>$centros]);
    }

    public function getCentroCreate(){
        $provs = Provincia::all();
        return view('admin.centro.create', ['provs'=>$provs]);
    }

    public function centroCreate(){
        return null;
    }

}
