@extends('layouts.master')

@section('titulo','Centro Deshabilitado')

@section('contenido')

    <br><br><br><br>
    <img src="{{ Storage::disk('s3')->url('ecoimg/img/deshabilitado.jpg') }}" alt="deshabilitado"
         style="margin-left: auto; margin-right: auto; display: block">
    <br><br>
    <h6 class="text-center text-muted">Su Centro de Acopio se encuentra Deshabilitado.</h6>
    <br><br>
    <h6 class="text-center text-muted">Favor comunicarse con la Administración</h6>
    <br><br><br><br>

@endsection