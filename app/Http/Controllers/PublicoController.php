<?php

namespace App\Http\Controllers;

use App\Centro;
use App\Material;
use App\Provincia;
use Illuminate\Http\Request;

class PublicoController extends Controller
{
    public function getCentrosAcopio(){
        $centros = Centro::with('provincia')->paginate(3);
        return view('publico.centros-de-acopio',['centros'=>$centros]);
    }

    public function getDetalleCentro($id){
        $centro = Centro::where('id',$id)->with('provincia')->first();
        return view('publico.detalle-centro',['ca'=>$centro]);
    }

    public function getMaterialesReciclaje(){
        $materiales = Material::paginate(6);
        return view('publico.materiales-de-reciclaje',['materiales'=>$materiales]);
    }
}
