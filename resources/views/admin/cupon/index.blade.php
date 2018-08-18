@extends('layouts.master')

@section('titulo','Principal Cupones')

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
        <h2 class="text-success text-center">Manejar Cupones de Canje</h2>
    </div>
    @if( Auth::user()->role_id === 1 )
        <br>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-success" href="{{ route('cupones.create') }}"
                   role="button" style="width: 150px">Crear Nuevo</a>
            </div>
        </div>
        <br>
    @endif
    <table class="table table-hover">
        <thead>
        <tr class="table-success">
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Categoría</th>
            <th scope="col" class="text-center">Editar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cupones as $cup)
            <tr class="table-light">
                <th scope="row">{{ $cup->nombre }}</th>
                <td>{{ $cup->descripcion }}</td>
                <td>{{ $cup->precio }}</td>
                <td>{{ $cup->categoria->nombre }}</td>
                <td class="text-center">
                    <a class="text-success font-weight-bold"
                       href="{{ route('cupones.edit',['cup'=>$cup->id]) }}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $cupones->links() }}
    <a role="button" href="{{ route('admin.index') }}" class="btn btn-info"
       style="width: 150px">Volver</a>
@endsection