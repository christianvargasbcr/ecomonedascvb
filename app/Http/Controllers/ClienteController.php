<?php

namespace App\Http\Controllers;

use App\Billetera;
use App\Canje;
use App\Compra;
use App\Cupon;
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

    public function getRealizarCompra($cup){
        if (Auth::user()->role_id == 3){
            $id = Auth::user()->id;
            $cupon = Cupon::find($cup);
            $bill = Billetera::with('cliente')->where('cliente_id',$id)->first();
            return view('cliente.comprar',['bill'=>$bill,'cupon'=>$cupon]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function realizarCompra(Request $request){
        $cliente_id = Auth::user()->id;
        $cupon = Cupon::find($request->input('cupon_id'));
        $compra = new Compra();
        $compra->cupon_id = $cupon->id;
        $compra->cliente_id = $cliente_id;
        $compra->save();
        $billetera = Billetera::with('cliente')->where('cliente_id',$cliente_id)->first();
        $compras = $billetera->saldo_compras + $cupon->precio;
        $billetera->saldo_compras = $compras;
        $disponible = $billetera->saldo_disponible - $cupon->precio;
        $billetera->saldo_disponible = $disponible;
        $billetera->save();
        return redirect()->route('ciente.billetera');
    }

    public function getBilletera(){
        if (Auth::user()->role_id == 3){
            $cliente_id = Auth::user()->id;
            $bill = Billetera::with('cliente')->where('cliente_id',$cliente_id)->first();
            $compras = Compra::with('cupon','cliente')
                ->where('cliente_id',$cliente_id)
                ->orderBy('created_at','asc')
                ->paginate(5);
            return view('cliente.billetera',['compras'=>$compras,'bill'=>$bill]);
        }
        else{
            return redirect()->route('principal');
        }
    }
}
