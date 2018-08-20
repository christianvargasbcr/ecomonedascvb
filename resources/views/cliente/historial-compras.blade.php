@extends('layouts.master')

@section('titulo','Historial de Compras')

@section('contenido')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
    @endif
    <br>
    <div class="container">
        <div class="row">
            <div class="text-center col-12 text-success">
                <h6 class="text-success">Historial de Compras</h6>
            </div>
            <br>
            <div class="row">
                <table class="table table-hover">
                    <tr class="table-success">
                        <th scope="col">Código</th>
                        <th scope="col">Cupon</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Precio</th>
                    </tr>
                    <tbody>
                    @foreach($compras as $com)
                        <tr class="table-light">
                            <td>{{ $com->id }}</td>
                            <td>{{ $com->cupon->nombre }}</td>
                            <td>{{ $com->cupon->descripcion }}</td>
                            <td>{{ date('m/d/Y', strtotime($com->created_at)) }}</td>
                            <td>{{ $com->cupon->precio }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection