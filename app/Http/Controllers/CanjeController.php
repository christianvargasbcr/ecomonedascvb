<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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

    public function getCanjeCreate(){
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

    public function canjeCreate(){
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
}
