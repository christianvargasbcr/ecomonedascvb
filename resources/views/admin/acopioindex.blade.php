@extends('layouts.master')

@section('titulo','Principal Centros de Acopio')

@section('contenido')

    {{--@if($user->centro->isEmpty())
        <br><br><br><br>
        <h6 class="text-center text-muted">No se ha deshabilitado ningun Centro de Acopio </h6>
        <br><br><br><br>
    @else--}}
        <h1>{{ $centro->name }}</h1>

    {{--@endif--}}

@endsection