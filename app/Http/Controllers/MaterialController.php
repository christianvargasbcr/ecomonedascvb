<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class MaterialController extends Controller
{
    public function getMaterialIndex(){
        if (Auth::user()->role_id == 1){
            $materiales = Material::all();
            return view('admin.material.index', ['materiales'=>$materiales]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getMaterialCreate(){
        if (Auth::user()->role_id == 1){
            return view('admin.material.create');
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function materialCreate(Request $request){
        if (Auth::user()->role_id == 1){
            $this->validate($request, [
                'nombre' => 'required|unique:materials,nombre|string|max:100',
                'precio' => 'required|min:1',
                'color' => 'required|unique:materials,color',
                'imagen' => 'required|image',
            ]);

            $imagen = $request->file('imagen');
            $nombreImagen = time().$request->file('imagen')->getClientOriginalName();
            $ruta = 'ecoimg/materiales/'.$nombreImagen;
            // Subir imagen a S3 bucket de AWS
            Storage::disk('s3')->put($ruta, file_get_contents($imagen),'public');

            $material = new Material([
                'nombre' => $request->input('nombre'),
                'precio' => $request->input('precio'),
                'color' => $request->input('color'),
                'imagen' => $ruta,
            ]);
            $material->save();

            return redirect()
                ->route('materiales.index')
                ->with('info', 'Material: '.$request->input('nombre').' agregado');
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getMaterialEdit(Material $mat){
        if (Auth::user()->role_id == 1){
            $mat = Material::find($mat->id);
            return view('admin.material.edit',['mat'=>$mat]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function materialEdit(Material $mat, Request $request){
        if (Auth::user()->role_id == 1){
            $this->validate($request, [
                'nombre' => 'required|string|max:100|unique:materials,nombre,'.$request->input('id'),
                'precio' => 'required|min:1',
                'color' => 'required|unique:materials,color,'.$request->input('id'),
            ]);

            $material = Material::find($request->input('id'));

            $imagen = $request->file('imagen');
            if (!($imagen === null) || !($imagen == "") ){
                Storage::disk('s3')->delete($material->imagen);
                $nombreImagen = time().$imagen->getClientOriginalName();
                $ruta = 'ecoimg/materiales/'.$nombreImagen;
                Storage::disk('s3')->put($ruta, file_get_contents($imagen),'public');
                $material->imagen = $ruta;
            }

            $material->nombre = $request->input('nombre');
            $material->precio = $request->input('precio');
            $material->color = $request->input('color');
            $material->save();

            return redirect()
                ->route('materiales.index')
                ->with('info', 'Material: '.$request->input('nombre').' editado');
        }
        else{
            return redirect()->route('principal');
        }
    }
}
