<?php

namespace App\Http\Controllers;

use App\Canje;
use App\Material;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CanjeController extends Controller
{
    public function getCanjeIndex(){
        if (Auth::user()->role_id == 2){
            $user = User::find(Auth::user()->id);
            if ($user->centro->isEmpty()){
                return view('otros.centrodeshabilitado');
            }
            else{
                //
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
        $canje->save();
        return response()->json($canje);
    }

    public function canjeDetalleCreate(Request $request){
        $canje = new Canje;
        $canje->centro_id = $request->input('centro_id');
        $canje->cliente_id = $request->input('cliente_id');
        $canje->save();
        return response()->json($canje);
    }

    public function getCanje(){
        if (Auth::user()->role_id == 2){
            $user = User::find(Auth::user()->id);
            if ($user->centro->isEmpty()){
                return view('otros.centrodeshabilitado');
            }
            else{
                //
            }
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function finalizarRegistroCanje(){
        return view('admin.canje.index');
    }
}
