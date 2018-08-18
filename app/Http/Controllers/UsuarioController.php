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
            $users = User::with('centro')->where('role_id','=',3)->paginate(5);
            return view('admin.usuario.listado', ['users'=>$users]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getUsuarioIndex(){
        if (Auth::user()->role_id == 1){
            $users = User::with('role')->where('role_id','=',2)->paginate(5);
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
            $this->validate($request, [
                'name' => 'required|string|max:100',
                'email' => 'required|string|email|max:100|unique:users,email',
                'direccion' => 'required|string|max:200',
                'telefono' => 'required|digits:8|numeric',
                'password' => 'required|string|min:6',
                'centro' => 'required|not_in:0',
            ]);

            $user = new User([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'direccion' => $request->input('direccion'),
                'telefono' => $request->input('telefono'),
                'password' => $request->input('password'),
                'role_id' => 2,
            ]);
            $user->save();
            $user->centro()->attach($request->input('centro'));

            return redirect()
                ->route('usuarios.index')
                ->with('info', 'Usuario: '.$request->input('name').' agregado');
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getUsuarioEdit(User $usr){
        if (Auth::user()->role_id == 1){
            $usr = User::find($usr->id);
            $centros = Centro::all();
            return view('admin.usuario.edit',['usr'=>$usr,'centros'=>$centros]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function usuarioEdit(User $usr, Request $request){
        if (Auth::user()->role_id == 1){
            $this->validate($request, [
                'name' => 'required|string|max:100',
                'email' => 'required|string|email|max:100|unique:users,email,'.$request->input('id'),
                'direccion' => 'required|string|max:200',
                'telefono' => 'required|digits:8|numeric',
                'centro' => 'required|not_in:0'
            ]);

            $user = User::find($request->input('id'));
            $aux = $request->input('name');
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->direccion = $request->input('direccion');
            $user->telefono = $request->input('telefono');
            $user->save();
            $user->centro()->sync($request->input('centro'));

            return redirect()
                ->route('usuarios.index')
                ->with('info', 'Usuario: '.$request->input('name').' editado');
        }
        else{
            return redirect()->route('principal');
        }
    }
}
