<?php

namespace App\Http\Controllers;

use App\Centro;
use Illuminate\Http\Request;
use App\Cupon;
use App\Categoria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CuponController extends Controller
{
    public function getCuponIndex(){
        if (Auth::user()->role_id == 1){
            $cups = Cupon::all();
            $cats = Categoria::orderBy('nombre','asc')->get();
            $cupones = Cupon::with('categoria')
                ->orderBy('nombre','asc')
                ->paginate(5);
            return view('admin.cupon.index',['cups'=>$cups,'cats'=>$cats,'cupones'=>$cupones]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getCuponCategoria(Categoria $cat){
        if (Auth::user()->role_id == 1){
            $cups = Cupon::all();
            $cats = Categoria::orderBy('nombre','asc')->get();
            $cupones = Cupon::with('categoria')
                ->where('categoria_id',$cat->id)
                ->orderBy('nombre','asc')
                ->paginate(5);
            return view('admin.cupon.index',['cups'=>$cups,'cats'=>$cats,'cupones'=>$cupones]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getCuponCreate(){
        if (Auth::user()->role_id == 1){
            $cats = Categoria::all();
            return view('admin.cupon.create',['cats'=>$cats]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function cuponCreate(Request $request){
        if (Auth::user()->role_id == 1){
            $this->validate($request, [
                'nombre' => 'required|string|max:150',
                'descripcion' => 'required|string|max:250',
                'precio' => 'required|string|min:1',
                'categoria' => 'required|not_in:0',
            ]);

            $imagen = $request->file('imagen');
            $nombreImagen = time().$request->file('imagen')->getClientOriginalName();
            $ruta = 'ecoimg/cupones/'.$nombreImagen;
            // Subir imagen a S3 bucket de AWS
            Storage::disk('s3')->put($ruta, file_get_contents($imagen),'public');

            $cupon = new Cupon([
                'nombre' => $request->input('nombre'),
                'descripcion' => $request->input('descripcion'),
                'precio' => $request->input('precio'),
                'categoria_id' => $request->input('categoria'),
                'imagen' => $ruta,
            ]);
            $cupon->save();

            return redirect()
                ->route('cupones.index')
                ->with('info', 'Cupón: '.$request->input('nombre').' agregado');
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getCuponEdit(Cupon $cup){
        if (Auth::user()->role_id == 1){
            $cupon = Cupon::find($cup->id);
            $cats = Categoria::all();
            return view('admin.cupon.edit',['cup'=>$cupon,'cats'=>$cats]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function cuponEdit(Request $request){
        if (Auth::user()->role_id == 1){
            $this->validate($request, [
                'nombre' => 'required|string|max:150',
                'descripcion' => 'required|string|max:250',
                'precio' => 'required|string|min:1',
                'categoria' => 'required|not_in:0',
            ]);

            $cupon = Cupon::find($request->input('id'));
            $imagen = $request->file('imagen');
            if (!($imagen === null) || !($imagen == "") ){
                Storage::disk('s3')->delete($cupon->imagen);
                $nombreImagen = time().$imagen->getClientOriginalName();
                $ruta = 'ecoimg/cupones/'.$nombreImagen;
                Storage::disk('s3')->put($ruta, file_get_contents($imagen),'public');
                $cupon->imagen = $ruta;
            }

            $cupon->nombre = $request->input('nombre');
            $cupon->descripcion = $request->input('descripcion');
            $cupon->precio = $request->input('precio');
            $cupon->categoria_id = $request->input('categoria');
            $cupon->save();

            return redirect()
                ->route('cupones.index')
                ->with('info', 'Cupón: '.$request->input('name').' editado');
        }
        else{
            return redirect()->route('principal');
        }
    }
}
