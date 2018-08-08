@extends('layouts.master')

@section('titulo','Crear Centro de Acopio')

@section('contenido')
    @include('partials.errors')
    <br>
    <div class="container text-success" style="display: block;margin-left: auto;margin-right: auto; width: 60%">
        <form action="{{ route('centro.create') }}" method="post" enctype="multipart/form-data" >
            <fieldset>

                <legend class="text-success">Crear Centro de Acopio</legend>

                <div class="form-group">
                    <label class="col-form-label" for="name">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" id="name" name="name">
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="provincia">Provincia</label>
                    <select class="form-control" id="provincia" name="provincia">
                        <option value="0">Seleccione una provincia</option>
                        @foreach($provs as $prov)
                            <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="direccion">Dirección Exacta</label>
                    <textarea class="form-control" id="direccion" rows="3" name="direccion"
                              placeholder="Ingrese la dirección exacta del Centro de Acopio"></textarea>
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="telefono">Teléfono</label>
                    <input type="text" class="form-control" placeholder="########" id="telefono" name="telefono">
                    <small id="telefonoHelp" class="form-text text-success">
                        Ingrese el teléfono de contacto sin guiones o espacios
                    </small>
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="email">Correo</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                           placeholder="Ingrese el correo de contacto" name="email">
                    <small id="emailHelp" class="form-text text-success">
                        El correo de contacto sera mostrado a los clientes
                    </small>
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="imagen">Imagen</label>
                    <input type="file" name="imagen" class="form-control-file " id="imagen" aria-describedby="fileHelp">
                    <small id="imagenHelp" class="form-text text-success">
                        Seleccione una imagen
                    </small>
                </div>

                @csrf
                <button type="submit" class="btn btn-success">Crear</button>
            </fieldset>
        </form>
    </div>

@endsection