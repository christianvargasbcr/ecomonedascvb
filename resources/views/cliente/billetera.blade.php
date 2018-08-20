@extends('layouts.master')
@section('titulo','Billetera Electrónica')
@section('contenido')
    <br>
    <div class="row">
        <div class="col-12 text-center">
            <h4 class="text-success">Billetera Electrónica</h4>
        </div>
        <br><br>
        <div class="row w-100">
            <div class="col-4" style="display: table-cell; float: none">
                <br>
                @include('partials.billetera')
            </div>
            <br>
            <div class="col-8" style="display: table-cell; float: none">
                <br>
                <div class="text-center">
                    <h6 class="text-success">Ultimas compras registradas</h6>
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
    </div>
@endsection