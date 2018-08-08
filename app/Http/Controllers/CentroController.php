<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Centro;
use App\Provincia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CentroController extends Controller
{

    public function getCentroIndex(){
        if (Auth::user()->role_id == 1){
            $centros = Centro::with('provincia')->get();
            return view('admin.centro.index', ['centros'=>$centros]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getCentroCreate(){
        if (Auth::user()->role_id == 1){
            $provs = Provincia::all();
            return view('admin.centro.create', ['provs'=>$provs]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function centroCreate(Request $request){
        if (Auth::user()->role_id == 1){
            $this->validate($request, [
                'name' => 'required|string|max:100',
                'provincia' => 'required|not_in:0',
                'direccion' => 'required|string|max:125',
                'telefono' => 'required|string|max:8',
                'email' => 'required|string|email|max:100',
                'imagen' => 'required|image',
            ]);

            $imagen = $request->file('imagen');
            $nombreImagen = time().$request->file('imagen')->getClientOriginalName();
            $ruta = 'ecoimg/centros/'.$nombreImagen;
            // Subir imagen a S3 bucket de AWS
            Storage::disk('s3')->put($ruta, file_get_contents($imagen),'public');

            $centro = new Centro([
                'name' => $request->input('name'),
                'provincia_id' => $request->input('provincia'),
                'direccion' => $request->input('direccion'),
                'telefono' => $request->input('telefono'),
                'correo' => $request->input('email'),
                'imagen' => $ruta,
            ]);
            $centro->save();

            return redirect()
                ->route('centro.index')
                ->with('info', 'Centro: '.$request->input('name').' agregado');
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function getCentroEdit(Centro $ca){

        if (Auth::user()->role_id == 1){
            $centro = Centro::find($ca->id);
            $provs = Provincia::all();
            return view('admin.centro.edit',['ca'=>$centro, 'provs'=>$provs]);
        }
        else{
            return redirect()->route('principal');
        }
    }

    public function centroEdit(Centro $ca, Request $request){

        if (Auth::user()->role_id == 1){
            $this->validate($request, [
                'name' => 'required|string|max:100',
                'provincia' => 'required|not_in:0',
                'direccion' => 'required|string|max:125',
                'telefono' => 'required|string|max:8',
                'email' => 'required|string|email|max:100',
            ]);

            $centro = Centro::find($request->input('id'));
            $imagen = $request->file('imagen');
            if (!($imagen === null) || !($imagen == "") ){
                Storage::disk('s3')->delete($centro->imagen);
                $nombreImagen = time().$imagen->getClientOriginalName();
                $ruta = 'ecoimg/centros/'.$nombreImagen;
                Storage::disk('s3')->put($ruta, file_get_contents($imagen),'public');
                $centro->imagen = $ruta;
            }

            $centro->name = $request->input('name');
            $centro->provincia_id = $request->input('provincia');
            $centro->direccion = $request->input('direccion');
            $centro->telefono = $request->input('telefono');
            $centro->correo = $request->input('email');
            $centro->save();

            return redirect()
                ->route('centro.index')
                ->with('info', 'Centro: '.$request->input('name').' editado');

        }
        else{
            return redirect()->route('principal');
        }
    }

}
