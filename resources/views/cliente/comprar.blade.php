@extends('layouts.master')
@section('titulo','Comprar')
@section('contenido')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="text-success">Realizar Canje de Cupón</h4>
            </div>
            <br>
            <div class="row">
                <div class="col-6" style="display: table-cell; float: none">
                    <br>
                    @include('partials.billetera')
                </div>
                <div class="col-6" style="display: table-cell; float: none;">
                    <br>
                    <div class="card mb-3 w-100" style="height: 90%; max-width: 48rem">
                        <div class="bg-success">
                            <h6 class="card-header text-white">{{ $cupon->nombre }}</h6>
                        </div>

                        <img style="height: 150px; width: 50%; display: block; margin-left: auto; margin-right: auto;"
                             src="{{ Storage::disk('s3')->url($cupon->imagen) }}" alt="Card image">
                        <div class="card-body">
                            <p class="card-text text-success">{{ $cupon->descripcion }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-success">Precio: <b>{{ $cupon->precio }} Ecomonedas</b></li>
                        </ul>
                        <form action="{{ route('ciente.compra') }}" method="post">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success" style="width: 100px">Confirmar</button>
                                <a role="button" href="{{ route('cupones-disponibles') }}" class="btn btn-info"
                                   style="width: 100px">Cancelar</a>
                                @csrf
                                <input id="cupon_id" name="cupon_id" type="hidden" value="{{ $cupon->id }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection