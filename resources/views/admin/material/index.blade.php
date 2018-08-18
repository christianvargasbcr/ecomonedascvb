@extends('layouts.master')

@section('titulo','Principal Materiales de Reciclaje')

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
        <h2 class="text-success text-center">Manejar Materiales de Reciclaje</h2>
    </div>
    <br>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-success" href="{{ route('materiales.create') }}"
                   role="button" style="width: 150px">Crear Nuevo</a>
            </div>
        </div>
    <br>
    <table class="table table-hover">
        <thead>
            <tr class="table-success">
                <th scope="col">Nombre</th>
                <th class="text-center" scope="col">Precio</th>
                <th class="text-center" scope="col">Color</th>
                <th class="text-center" scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($materiales as $mat)
            <tr class="table-light">
                <th class="" scope="row">{{ $mat->nombre }}</th>
                <td class="text-center">{{ $mat->precio }}</td>
                <td class="text-center">
                    <i class="fa fa-circle fa-lg" style="color: {{ $mat->color }}"></i>
                </td>
                <td class="text-center">
                    <a class="text-success font-weight-bold"
                       href="{{ route('materiales.edit',['mat'=>$mat->id]) }}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $materiales->links() }}
    <a role="button" href="{{ route('admin.index') }}" class="btn btn-info"
       style="width: 150px">Volver</a>
@endsection
