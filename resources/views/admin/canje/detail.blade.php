@extends('layouts.master')
@section('titulo','Detalle Centro de Acopio')
@section('contenido')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="text-success">Detalle del Canje</h5>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-success text-white">
                Número:
                <strong> {{ $canje->id }}</strong>
                <span class="float-right"> <strong>Fecha:</strong> {{ date('m/d/Y', strtotime($canje->created_at)) }}</span>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">Cliente:</h6>
                        <div>
                            <strong>{{ $canje->cliente->name }}</strong>
                        </div>
                        <div>{{ $canje->cliente->direccion }}</div>
                        <div>{{ $canje->cliente->email }}</div>
                        <div>{{ $canje->cliente->telefono }}</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">Centro de Acopio:</h6>
                        <div>
                            <strong>{{ $canje->centro->name }}</strong>
                        </div>
                        <div>{{ $canje->centro->direccion }},
                            {{ $canje->centro->provincia->name }}</div>
                        <div>{{ $canje->centro->correo }}</div>
                        <div>{{ $canje->centro->telefono }}</div>
                    </div>
                </div>

                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead class="table-success">
                            <tr>
                                <th>Material</th>

                                <th class="rigth">Precio</th>
                                <th class="rigth">Cantidad</th>
                                <th class="right">Monto</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($canje->detalleCanjes as $det)
                            <tr>
                                <td class="left strong">{{ $det->material->nombre }}</td>

                                <td class="right">{{ $det->material->precio }}</td>
                                <td class="center">{{ $det->cantidad }}</td>
                                <td class="right">{{ $det->monto }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr class="table-success text-white">
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong>{{ $canje->total }} Ecomonedas</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection