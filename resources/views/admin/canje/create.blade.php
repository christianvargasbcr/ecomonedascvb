@extends('layouts.master')

@section('titulo','Registrar Canje')

@section('contenido')
    @include('partials.errors')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="text-success">Registar Canje de Materiales</h5>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 text-center bg-white border border-success">
                <h6 class="text-success" style="margin-top: 5px">{{ $centro->name }}</h6>
            </div>
        </div>
        <div class="row">
            <div id="usuarioCanje" class="col-6 text-center bg-white border border-success">
                <fieldset>
                    <br>
                    <h6 class="text-success">Seleccionar Cliente</h6>
                    <div class="form-group" style="display: inline-flex">
                        <label class="col-form-label col-form-label-sm text-success" for="email"
                               style="margin-right: 10px">Correo</label>
                        <input type="email" class="form-control form-control-sm" id="email"
                               aria-describedby="emailHelp" name="email" style="width: 300px">
                        <a id="searchUser" class="btn btn-success btn-sm" href="#"
                           role="button" style="margin-left: 10px">Buscar</a>
                    </div>
                    <div class="text-danger" >
                        <small id="errorEmail" style="display:none;"></small>
                    </div>
                    <div class="text-success" >
                        <small id="userSuccess" style="display:none;">
                            El Usuario se encuentra registrado en el Sistema
                        </small>
                    </div>
                    <div class="form-group" style="display: inline-flex">
                        <label id="encontrado" class="col-form-label col-form-label-sm text-success"
                               style="margin-right: 10px" hidden>Nombre</label>
                    </div>
                    @csrf
                    <div>
                        <a id="registrarCanje" class="btn btn-success btn-sm disabled" href="#"
                           role="button" style="width: 150px; margin-bottom: 10px">Registrar</a>
                    </div>
                </fieldset>
            </div>
            <div class="col-6 text-center bg-white border border-success">
                <fieldset>
                    <br>
                    <h6 class="text-success">Agregar Material</h6>
                    <div class="form-group" style="display: inline-flex">
                        <label class="col-form-label col-form-label-sm text-success" for="material"
                               style="margin-right: 10px">Material</label>
                        <select class="form-control form-control-sm" id="material" name="material"
                                style="width: 200px" disabled>
                            <option value="0">Seleccione un material</option>
                            @foreach($mats as $mat)
                                <option value="{{ $mat->id }}">{{ $mat->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="display: inline-flex">
                        <label class="col-form-label col-form-label-sm text-success" for="cantidad"
                               style="margin-right: 10px">Cantidad</label>
                        <input type="number" class="form-control form-control-sm" id="cantidad"
                               name="cantidad" style="width: 200px" disabled>
                    </div>
                    @csrf
                    <div>
                        <a id="addDetail" class="btn btn-success btn-sm disabled" href="#"
                           role="button" style="width: 150px; margin-bottom: 10px">Agregar</a>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-white">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-success">
                            <th scope="col">Material</th>
                            <th class="text-center" scope="col">Cantidad</th>
                            <th class="text-center" scope="col">Precio</th>
                            <th class="text-center" scope="col">Total</th>
                            <th class="text-center" scope="col"></th>
                            {{--<th scope="col" class="text-center">Editar</th>
                            <th scope="col" class="text-center">Deshabilitar</th>--}}
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot class="text-center">
                        <th></th>
                        <th></th>
                        <th class="text-success" scope="col">Ecomonedas</th>
                        <th class="text-success" scope="col"></th>
                    </tfoot>
                </table>
            </div>
            <div class="col-12 text-center">
                <a role="button" href="#" class="btn btn-success disabled"
                   style="width: 200px">Finalizar Registro</a>
            </div>
        </div>
        <input type="hidden" name="canje_id" id="canje_id" value="">
        <input type="hidden" name="cliente_id" id="cliente_id" value="">
        <input type="hidden" name="centro_id" id="centro_id" value="{{ $centro->id }}">
    </div>
@endsection