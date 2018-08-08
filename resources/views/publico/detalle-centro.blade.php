@extends('layouts.master')
@section('titulo','Detalle Centro de Acopio')
@section('contenido')
    <br>
    <div class="jumbotron text-success shadow">
        <div class="container">
            <div class="row bg-success">
                <div class="col-12 text-center">
                    <h4 class="text-white">{{ $ca->name }}</h4>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-6">
                    <img src="{{ Storage::disk('s3')->url($ca->imagen) }}"
                         style="height: 300px; width: 90%; display: block; margin-left: auto; margin-right: auto">
                </div>
                <div class="col-6">
                    <ul class="list-group">
                        <li class="list-group-item bg-success text-white text-center"><b>Información</b></li>
                        <li class="list-group-item text-success"><b>Provincia: </b>{{ $ca->provincia->name }}</li>
                        <li class="list-group-item text-success"><b>Dirección: </b>{{ $ca->direccion }}</li>
                        <li class="list-group-item text-success"><b>Teléfono: </b>{{ $ca->telefono }}</li>
                        <li class="list-group-item text-success"><b>Correo: </b>{{ $ca->correo }}</li>
                    </ul>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="offset-4 col-4 text-center">
                    <a class="btn btn-success btn-block" href="{{ route('centros-de-acopio') }}" role="button">
                        <b>Regresar</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection