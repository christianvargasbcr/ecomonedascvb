@extends('layouts.master')

@section('titulo','Administrar')

@section('contenido')
    <br>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h3 class="text-success">Bienvenido al Centro de Administracion de Ecomonedas</h3>
            </div>
            <br><br><br>
            <div class="card-group">
                <a href="{{ route('centro.index') }}">
                    <div class="card" style="display:inline-block; width: 250px; height: 100%">
                        <br>
                        <img class="card-img-top" src="{{ Storage::disk('s3')->url('ecoimg/img/adm_ca_logo.png') }}"
                             alt="Centros Logo" style="height: 125px; width: 200px; display: block; margin-left: auto; margin-right: auto">
                        <div class="card-body">
                            <h6 class="card-title text-success">Centros de Acopio</h6>
                            <p class="card-text text-success">
                                Manejar, crear y actualizar información de Centros de Acopio.
                                Deshabilitar centros para restringir transacciones.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('materiales.index') }}">
                    <div class="card" style="display:inline-block; width: 250px; height: 100%">
                        <br>
                        <img class="card-img-top" src="{{ Storage::disk('s3')->url('ecoimg/img/adm_ma_logo.jpg') }}"
                             alt="Materiales Logo" style="height: 125px; width: 200px; display: block; margin-left: auto; margin-right: auto">
                        <div class="card-body">
                            <h6 class="card-title text-success">Materiales de Reciclaje</h6>
                            <p class="card-text text-success">
                                Manejar, crear y actualizar Materiales Reciclables disponibles para
                                canjear por Ecomonedas
                            </p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('usuarios.index') }}">
                    <div class="card" style="display:inline-block; width: 250px; height: 100%">
                        <br>
                        <img class="card-img-top" src="{{ Storage::disk('s3')->url('ecoimg/img/adm_usr_logo.png') }}"
                             alt="Usuarios Logo" style="height: 125px; width: 200px; display: block; margin-left: auto; margin-right: auto">
                        <div class="card-body">
                            <h6 class="card-title text-success">Gestion Administradores</h6>
                            <p class="card-text text-success">
                                Manejar, crear y actualizar información de usuarios administradores
                                de Centros de Acopio. Ver listado de Clientes
                            </p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('cupones.index') }}">
                    <div class="card" style="display:inline-block; width: 250px; height: 100%">
                        <br>
                        <img class="card-img-top" src="{{ Storage::disk('s3')->url('ecoimg/img/adm_cup_logo.jpg') }}"
                             alt="Usuarios Logo" style="height: 125px; width: 200px; display: block; margin-left: auto; margin-right: auto">
                        <div class="card-body">
                            <h6 class="card-title text-success">Cupones de Canje</h6>
                            <p class="card-text text-success">
                                Manejar, crear y actualizar información de Cupones de Canje disponibles para
                                compras utlizando las ecomonedas.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
