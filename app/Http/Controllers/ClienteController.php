<?php

namespace App\Http\Controllers;

use App\Canje;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function getClienteIndex(){
        if (Auth::user()->role_id == 3){
            return view('cliente.index');
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getHistorialCanjes(){
        if (Auth::user()->role_id == 3){
            $id = Auth::user()->id;
            $canjes = Canje::with('cliente','centro','detalleCanjes')
                ->where('cliente_id',$id)
                ->orderBy('created_at','desc'
                )->paginate(5);
            return view('cliente.historial-canjes',['canjes'=>$canjes]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getDetalleCanje($id){
        if (Auth::user()->role_id == 3){
            $canje = Canje::with('cliente','centro','detalleCanjes')
                ->where('id',$id)
                ->first();
            return view('cliente.detalle-canje',['canje'=>$canje]);

        }
        else{
            return redirect()->route('principal');
        }
    }
}
