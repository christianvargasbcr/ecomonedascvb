@extends('layouts.master')

@section('titulo','Centros de Acopio')

@section('contenido')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
    @endif
    <br>
    <div class="row text-center">
        <h2 class="text-success text-center">Manejar Centros de Acopio</h2>
    </div>
    @if( Auth::user()->role_id === 1 )
        <br>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-success btn-lg" href="{{ route('centro.create') }}" role="button">Crear Nuevo</a>
            </div>
        </div>
        <br>
    @endif
    <table class="table table-hover">
        <thead>
            <tr class="table-success">
                <th scope="col">Nombre</th>
                <th scope="col">Provincia</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($centros as $centro)
            <tr class="table-light">
                <th scope="row">{{ $centro->name }}</th>
                <td>{{ $centro->provincia->name }}</td>
                <td>{{ $centro->telefono }}</td>
                <td>
                    <a class="text-success font-weight-bold" href="#">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection