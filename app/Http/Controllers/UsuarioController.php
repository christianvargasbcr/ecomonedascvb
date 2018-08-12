<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Centro;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

    public function getListadoClientes(){
        if (Auth::user()->role_id == 1){
            $users = User::with('role')->where('id','=',3)->paginate(10);
            return view('admin.usuario.listado', ['users'=>$users]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getUsuarioIndex(){
        if (Auth::user()->role_id == 1){
            $users = User::with('role')->where('id','=',2)->paginate(10);
            return view('admin.usuario.index', ['users'=>$users]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getUsuarioCreate(){
        if (Auth::user()->role_id == 1){
            $roles = Role::where('id','<>',1)->get();
            $centros = Centro::all();
            return view('admin.usuario.create',['roles'=>$roles,'centros'=>$centros]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function usuarioCreate(Request $request){
        if (Auth::user()->role_id == 1){
            return null;
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getUsuarioEdit(User $usr){
        if (Auth::user()->role_id == 1){
            $usr = User::find($usr->id);
            $roles = Role::where('id','<>',1)->get();
            $centros = Centro::all();
            return view('admin.usuario.edit',['usr'=>$usr,'roles'=>$roles,'centros'=>$centros]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function usuarioEdit(User $usr, Request $request){
        if (Auth::user()->role_id == 1){
            return null;
        }
        else{
            return redirect()->route('principal');
        }
    }
}
