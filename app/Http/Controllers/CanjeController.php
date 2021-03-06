<?php

namespace App\Http\Controllers;

use App\Billetera;
use App\Canje;
use App\CanjeDetalle;
use App\Material;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Array_;

class CanjeController extends Controller
{
    public function getCanjeIndex(){
        if (Auth::user()->role_id == 2){
            $user = User::find(Auth::user()->id);
            if ($user->centro->isEmpty()){
                return view('otros.centrodeshabilitado');
            }
            else{
                $centroId = $user->centro->first()->id;
                $canjes = Canje::with('cliente')
                    ->where('centro_id',$centroId)
                    ->orderBy('created_at','desc')
                    ->get();
                return view('admin.canje.index', ['canjes'=>$canjes]);
            }
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getUserByEmail(Request $request){
        $rules = array(
            'email' => 'required'
        );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails()){
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $user = User::where('email',$request->input('email'))->first();
            return response()->json($user);
        }
    }

    public function getCanjeCreate(){
        if (Auth::user()->role_id == 2){
            $user = User::find(Auth::user()->id);
            if ($user->centro->isEmpty()){
                return view('otros.centrodeshabilitado');
            }
            else{
                $centro = $user->centro->first();
                $mats = Material::orderBy('nombre','asc')->get();
                return view('admin.canje.create',['mats'=>$mats,'centro'=>$centro]);
            }
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function canjeCreate(Request $request){
        $canje = new Canje;
        $canje->centro_id = $request->input('centro_id');
        $canje->cliente_id = $request->input('cliente_id');
        $canje->total = 0;
        $canje->save();
        return response()->json($canje);
    }

    public function canjeDetalleCreate(Request $request){
        $cd = new CanjeDetalle();
        $cd->canje_id = $request->input('canje_id');
        $cd->material_id = $request->input('material_id');
        $mat = Material::find($request->input('material_id'));
        $precio = $mat->precio;
        $cantidad = $request->input('cantidad');
        $monto = $precio * $cantidad;
        $cd->cantidad = $cantidad;
        $cd->monto = $monto;
        $cd->save();
        $canje = Canje::find($cd->canje_id);
        $total = $canje->total;
        $canje->total = $total + $monto;
        $canje->save();
        $detalle = CanjeDetalle::with('material')->where('id',$cd->id)->first();
        $result = array($canje,$detalle);
        return response()->json($result);
    }

    public function getCanje($id){
        if (Auth::user()->role_id == 2){
            $user = User::find(Auth::user()->id);
            if ($user->centro->isEmpty()){
                return view('otros.centrodeshabilitado');
            }
            else{
                $canje = Canje::with('cliente','centro','detalleCanjes')
                    ->where('id',$id)
                    ->first();
                return view('admin.canje.detail',['canje'=>$canje]);
            }
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function finalizarRegistroCanje(Request $request){
        if (Auth::user()->role_id == 2){
            $user = User::find(Auth::user()->id);
            if ($user->centro->isEmpty()){
                return view('otros.centrodeshabilitado');
            }
            else{
                $id = Input::get('canje_id');
                $canje = Canje::find($id);
                $billetera = Billetera::where('cliente_id',$canje->cliente_id)->first();
                $disponible = $billetera->saldo_disponible + $canje->total;
                $total = $billetera->saldo_canjes + $canje->total;
                $billetera->saldo_disponible = $disponible;
                $billetera->saldo_canjes = $total;
                $billetera->save();
                $centroId = $user->centro->first()->id;
                $canjes = Canje::with('cliente')
                    ->where('centro_id',$centroId)
                    ->orderBy('created_at','desc')
                    ->get();
                return route('canjes.index', ['canjes'=>$canjes]);
            }
        }
        else{
            return redirect()->route('principal');
        }
    }
}
