<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cupon;
use App\Categoria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CuponController extends Controller
{
    public function getCuponIndex(){
        if (Auth::user()->role_id == 1){
            $cupones = Cupon::with('categoria')
                ->orderBy('nombre','asc')
                ->paginate(5);
            return view('admin.cupon.index',['cupones'=>$cupones]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getCuponCreate(){
        if (Auth::user()->role_id == 1){

            return null;
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function cuponCreate(Request $request){
        if (Auth::user()->role_id == 1){

            return null;
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getCuponEdit(){
        if (Auth::user()->role_id == 1){

            return null;
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function cuponEdit(Cupon $cup, Request $request){
        if (Auth::user()->role_id == 1){

            return null;
        }
        else{
            return redirect()->route('principal');
        }
    }
}
