@extends('layouts.master')

@section('titulo','Modificar Usuario')

@section('contenido')
    @include('partials.errors')

    <br>
    <div class="container text-success" style="display: block;margin-left: auto;margin-right: auto; width: 60%">
        <form action="{{ route('usuarios.edit',['usr'=>$usr->id]) }}" method="post" enctype="multipart/form-data" >
            <fieldset>

                <legend class="text-success">Modificar Usuario</legend>

                <div class="form-group">
                    <label class="col-form-label" for="name">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" id="name"
                           name="name" value="{{ $usr->name }}">
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="email">Correo</label>
                    <input type="email" class="form-control" id="email"
                           placeholder="Dirección de correo" name="email" value="{{ $usr->email }}">
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="direccion">Dirección</label>
                    <input type="text" class="form-control" placeholder="Dirección" id="direccion"
                           name="direccion" value="{{ $usr->direccion }}">
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="telefono">Teléfono</label>
                    <input type="text" class="form-control" placeholder="########" id="telefono"
                           name="telefono" value="{{ $usr->telefono }}">
                    <small id="telefonoHelp" class="form-text text-success">
                        Ingrese el teléfono sin guiones o espacios
                    </small>
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="centro">Centro De Acopio</label>
                    <select class="form-control" id="centro" name="centro">
                        <option value="0">Seleccione el Centro</option>
                        @foreach($centros as $centro)
                            <option value="{{ $centro->id }}">{{ $centro->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>

                <input type='hidden' name="id" value="{{ $usr->id}}">
                @csrf
                <div>
                    <button type="submit" class="btn btn-success" style="width: 150px">Guardar</button>
                    <a role="button" href="{{ route('usuarios.index') }}" class="btn btn-info"
                       style="width: 150px">Cancelar</a>
                </div>

            </fieldset>
        </form>
    </div>
@endsection