@extends('layouts.master')

@section('titulo','Login')

@section('contenido')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-success mb-3 shadow">
                    <div class="card-header bg-success text-white">
                        <h5 class="text-center">Ingresar</h5>
                    </div>

                    <div class="card-body text-success">
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">Correo Electrónico</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-success btn-block">
                                        Aceptar
                                    </button>
                                    <button type="button" class="btn btn-info btn-block">
                                        Cancelar
                                    </button>
                                </div>
                            </div>

                            {{--<div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <a class="btn btn-link text-success" href="{{ route('password.request') }}">
                                        Olvido su password?
                                    </a>
                                </div>
                            </div>--}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
