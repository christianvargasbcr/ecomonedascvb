@extends('layouts.master')

@section('titulo','Centros Deshabilitados')

@section('contenido')
{{--    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
    @endif--}}
    <br>
    <div class="row text-center">
        <h2 class="text-success text-center">Centros de Acopio Deshabilitados</h2>
    </div>
    <br>
    @if($centros->isEmpty())
        <br><br><br><br>
        <h6 class="text-center text-muted">No se ha deshabilitado ningun Centro de Acopio </h6>
        <br><br><br><br>
    @else
        <table class="table table-hover">
            <thead>
            <tr class="table-success">
                <th scope="col">Nombre</th>
                <th scope="col">Provincia</th>
                <th scope="col">Teléfono</th>
                <th scope="col" class="text-center">Habilitar</th>
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
                           href="{{ route('centro.restore',['id'=>$centro->id]) }}">Habilitar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
    <a role="button" href="{{ route('centro.index') }}" class="btn btn-info"
       style="width: 150px">Volver</a>
    @csrf
@endsection