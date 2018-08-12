@extends('layouts.master')
@section('titulo','Materiales de Recilaje')
@section('contenido')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="text-success">Materiales de Reciclaje</h4>
            </div>
            <br>
            <br>
            <br>
            @foreach($materiales as $mat)
                <div class="col-4">
                    <div class="card border-dark mb-3" style="max-width: 20rem;">
                        <div class="card-header">{{ $mat->nombre }}</div>
                        <div class="card-body">
                            <img style="height: 150px; width: 80%; display: block; margin-left: auto; margin-right: auto"
                                 src="{{ Storage::disk('s3')->url($mat->imagen) }}" alt="ca_img">
                            <p class="card-text text-success">Precio: {{ $mat->precio }} Eomonedas</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row text-success">
            {{ $materiales->links() }}
        </div>
    </div>
@endsection