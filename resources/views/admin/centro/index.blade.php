@extends('layouts.master')

@section('titulo','Principal Centros de Acopio')

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
                <a class="btn btn-success" href="{{ route('centro.create') }}"
                   role="button" style="width: 150px">Crear Nuevo</a>
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
                <th scope="col" class="text-center">Editar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($centros as $centro)
            <tr class="table-light">
                <th scope="row">{{ $centro->name }}</th>
                <td>{{ $centro->provincia->name }}</td>
                <td>{{ $centro->telefono }}</td>
                <td class="text-center">
                    <a class="text-success font-weight-bold"
                       href="{{ route('centro.edit',['ca'=>$centro->id]) }}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $centros->links() }}
    <a role="button" href="{{ route('admin.index') }}" class="btn btn-info"
       style="width: 150px">Volver</a>
@endsection