@extends('layouts.master')

@section('titulo','Inicio')

@section('contenido')
    <br>
    <div class="container">
        <div class="row">
            <div class="text-center col-12">
                <h3 class="text-success">Bienvenido a Ecomonedas</h3>
            </div>
            <br><br><br>
            <div class="card-group">
                <a href="{{ route('ciente.billetera') }}">
                    <div class="card" style="display:inline-block; width: 250px; height: 100%">
                        <br>
                        <img class="card-img-top" src="{{ Storage::disk('s3')->url('ecoimg/img/billetera.jpg') }}"
                             alt="Usuarios Logo" style="height: 125px; width: 200px; display: block; margin-left: auto; margin-right: auto">
                        <div class="card-body">
                            <h6 class="card-title text-success">Billetera Electrónica</h6>
                            <p class="card-text text-success">
                                Revisa tu saldo de ecomonedas, saldo total de canjes realizados y
                                saldo total de compras realizadas en Ecomonedas.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('cupones-disponibles') }}">
                    <div class="card" style="display:inline-block; width: 250px; height: 100%">
                        <br>
                        <img class="card-img-top" src="{{ Storage::disk('s3')->url('ecoimg/img/compras2.jpg') }}"
                             alt="canje_logo" style="height: 125px; width: 200px; display: block; margin-left: auto; margin-right: auto">
                        <div class="card-body">
                            <h6 class="card-title text-success">Canjear Ecomonedas</h6>
                            <p class="card-text text-success">
                                Utiliza tus Ecomonedas para comprar cupones canjeables por productos de
                                diferentes categorías.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('ciente.historial-canjes') }}">
                    <div class="card" style="display:inline-block; width: 250px; height: 100%">
                        <br>
                        <img class="card-img-top" src="{{ Storage::disk('s3')->url('ecoimg/img/adm_cup_logo.jpg') }}"
                             alt="Materiales Logo" style="height: 125px; width: 200px; display: block; margin-left: auto; margin-right: auto">
                        <div class="card-body">
                            <h6 class="card-title text-success">Historial de Canjes</h6>
                            <p class="card-text text-success">
                                Revisa la información en detalle de tus canjes de Materiales Reciclables y
                                Ecomonedas recibidas
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="card" style="display:inline-block; width: 250px; height: 100%">
                        <br>
                        <img class="card-img-top" src="{{ Storage::disk('s3')->url('ecoimg/img/historial.jpg') }}"
                             alt="Usuarios Logo" style="height: 125px; width: 200px; display: block; margin-left: auto; margin-right: auto">
                        <div class="card-body">
                            <h6 class="card-title text-success">Historial de Compras</h6>
                            <p class="card-text text-success">
                                Revisa el detalle de tu historial de compra de cupones en Ecomonedas
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
