<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getAdminIndex(){
        if (Auth::user()->role_id == 1){
            return view('admin.index');
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getAcopioIndex(){
        if (Auth::user()->role_id == 2){
            $user = User::find(Auth::user()->id);
            if ($user->centro->isEmpty()){
                return view('otros.centrodeshabilitado');
            }
            else{
                $centro = $user->centro->first();
                return view('admin.acopioindex',['centro'=>$centro]);
            }

        }
        else{
            return redirect()->route('principal');
        }
    }
}
