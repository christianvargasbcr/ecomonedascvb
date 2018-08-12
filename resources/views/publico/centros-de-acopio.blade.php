@extends('layouts.master')
@section('titulo','Centros de Acopio')
@section('contenido')
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="text-success">Centros de Acopio</h4>
            </div>
            <br><br>
            <br>
            @foreach($centros as $ca)
                <div class="col-4">
                    <div class="card mb-3">
                        <h5 class="card-header bg-success text-white">{{ $ca->name }}</h5>
                        <div class="card-body">
                            <h6 class="card-subtitle text-success ">{{ $ca->provincia->name }}</h6>
                        </div>
                        <img style="height: 200px; width: 80%; display: block; margin-left: auto; margin-right: auto"
                             src="{{ Storage::disk('s3')->url($ca->imagen) }}" alt="ca_img">
                        {{--<div class="card-body">
                            <p class="card-text">{{ $ca->direccion }}
                            </p>
                        </div>--}}
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-success"><b>Teléfono: </b>{{ $ca->telefono }}</li>
                            <li class="list-group-item text-success"><b>Correo: </b>{{ $ca->correo }}</li>
                            <li class="list-group-item">
                                <a href="{{ route('detalle-centro',['id'=>$ca->id]) }}" role="button"
                                   class="btn btn-success">Información</a>
                            </li>
                        </ul>
                        {{--<div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>--}}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row text-success">
            {{ $centros->links() }}
        </div>
    </div>
@endsection