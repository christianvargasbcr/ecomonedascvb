@extends('layouts.master')

@section('titulo','Listado Clientes')

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
        <h2 class="text-success text-center">Listado de Clientes</h2>
    </div>
    <br>
    <table class="table table-hover">
        <thead>
        <tr class="table-success">
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Rol</th>
            {{--<th scope="col" class="text-center">Editar</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($users as $usr)
            <tr class="table-light">
                <th scope="row">{{ $usr->name }}</th>
                <td>{{ $usr->email }}</td>
                <td>{{ $usr->telefono }}</td>
                <td>{{ $usr->direccion }}</td>
                <td>{{ $usr->role->name }}</td>
                {{--<td class="text-center">
                    <a class="text-success font-weight-bold"
                       href="{{ route('usuarios.edit',['usr'=>$usr->id]) }}">Editar</a>
                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
    <a role="button" href="{{ route('admin.index') }}" class="btn btn-info"
       style="width: 150px">Volver</a>

@endsection