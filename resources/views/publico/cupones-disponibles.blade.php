@extends('layouts.master')
@section('titulo','Cupones de Canje')
@section('contenido')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="text-success">Cupones de Canje Disponibles</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3" style="display: table-cell; float: none">
                <h6 class="text-success">Categorías</h6>
                <br>
                <ul class="list-group text-success">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('cupones-disponibles') }}"
                           class="text-success">Todas</a>
                        <span class="badge badge-pill badge-success">{{ count($cups) }}</span>
                    </li>
                    @foreach($cats as $cat)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ route('cupones-categoria',['cat'=>$cat->id]) }}"
                               class="text-success">{{ $cat->nombre }}</a>
                            <span class="badge badge-pill badge-success">{{ count($cat->cupones) }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-9" style="display: table-cell; float: none">
                <div class="container">
                    <div class="row">
                        @foreach($cupones as $cup)
                            <div class="col-4">
                                <div class="card mb-3" style="height: 97%">
                                    <div class="bg-success">
                                        <h6 class="card-header text-white">{{ $cup->nombre }}</h6>
                                    </div>

                                    <img style="height: 150px; width: 50%; display: block; margin-left: auto; margin-right: auto;"
                                         src="{{ Storage::disk('s3')->url($cup->imagen) }}" alt="Card image">
                                    <div class="card-body">
                                        <p class="card-text text-success">{{ $cup->descripcion }}</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-success">Precio: <b>{{ $cup->precio }} Ecomonedas</b></li>
                                    </ul>
                                    @auth()
                                        @if( Auth::user()->role_id === 3 )
                                            <div class="card-body">
                                                <a href="#" class="card-link"><b>Comprar</b></a>
                                            </div>
                                        @endif
                                    @endauth
                                    <div class="card-footer text-white bg-info">
                                        {{ $cup->categoria->nombre }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row text-success">
                        {{ $cupones->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection