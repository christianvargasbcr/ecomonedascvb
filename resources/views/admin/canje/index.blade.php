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
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="text-success">Historial de Canjes</h5>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">Numero</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Total</th>
                            <th scope="col" class="text-center">Detalle</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($canjes as $can)
                        <tr class="table-light">
                            <th scope="row">{{ $can->id }}</th>
                            <td>{{ $can->cliente->name }}</th>
                            <td>{{ date('d-M-y', strtotime($can->created_at)) }}</td>
                            <td>{{ $can->total }}</td>
                            <td class="text-center">
                                <a class="text-success font-weight-bold"
                                   href="{{ route('canjes.detail',['id'=>$can->id]) }}">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection