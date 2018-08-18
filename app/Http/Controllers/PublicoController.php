<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Centro;
use App\Material;
use App\Cupon;
use Illuminate\Http\Request;

class PublicoController extends Controller
{
    public function getPrincipal(){
        $cups = Cupon::all();
        $cats = Categoria::orderBy('nombre','asc')->get();
        return view('publico.principal',['cups'=>$cups,'cats'=>$cats]);
    }

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

    public function getCuponesDisponibles(){
        $cups = Cupon::all();
        $cats = Categoria::orderBy('nombre','asc')->get();
        $cupones = Cupon::with('categoria')
            ->orderBy('nombre','asc')
            ->paginate(6);
        return view('publico.cupones-disponibles',['cups'=>$cups,'cats'=>$cats, 'cupones'=>$cupones]);
    }

    public function getCuponesFiltrados(Categoria $cat){
        $cups = Cupon::all();
        $cats = Categoria::orderBy('nombre','asc')->get();
        $cupones = Cupon::with('categoria')
            ->where('categoria_id',$cat->id)
            ->orderBy('nombre','asc')
            ->paginate(6);
        return view('publico.cupones-disponibles',['cups'=>$cups,'cats'=>$cats,'cupones'=>$cupones]);
    }
}
