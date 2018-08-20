@extends('layouts.master')

@section('titulo','Principal Centros de Acopio')

@section('contenido')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="text-success">Bienvenido al Sistema de Registro de Canjes</h5>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-12 text-center">
                <h4 class="text-success">{{ $centro->name }}</h4>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <img src="{{ Storage::disk('s3')->url($centro->imagen) }}" alt="centro_img"
                 style="margin-left: auto; margin-right: auto; display: block; height: 22%; width: 32%">
        </div>
        <br>
        <div class="row text-center">
            <div class="col-12 text-center">
                <a class="btn btn-success" href="{{ route('canjes.create') }}"
                   role="button" style="width: 150px">Registrar Canje</a>
            </div>
        </div>



    </div>



@endsection