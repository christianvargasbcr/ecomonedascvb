@extends('layouts.master')

@section('titulo','Principal Cupones')

@section('contenido')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
    @endif


@endsection