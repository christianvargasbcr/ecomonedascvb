<?php

namespace App\Http\Controllers;

use App\Centro;
use App\Provincia;
use Illuminate\Http\Request;

class PublicoController extends Controller
{
    public function getCentrosAcopio(){
        $centros = Centro::with('provincia')->get();
        return view('publico.centros-de-acopio',['centros'=>$centros]);
    }

    public function getDetalleCentro($id){
        $centro = Centro::where('id',$id)->with('provincia')->first();
        return view('publico.detalle-centro',['ca'=>$centro]);
    }

    public function getMaterialesReciclaje(){
        return null;
    }
}
