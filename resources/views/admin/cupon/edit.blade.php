@extends('layouts.master')

@section('titulo','Modificar Centros de Acopio')

@section('contenido')
    @include('partials.errors')
    <br>
    <div class="container text-success" style="display: block;margin-left: auto;margin-right: auto; width: 60%">
        <form action="{{ route('cupones.edit',['cup'=>$cup->id]) }}" method="post" enctype="multipart/form-data" >
            <fieldset>

                <legend class="text-success">Modificar Cupón de Canje</legend>

                <div class="form-group">
                    <label class="col-form-label" for="nombre">Nombre</label>
                    <input type="text" class="form-control" placeholder="Ingrese el Nombre"
                           id="nombre" name="nombre" value="{{ $cup->nombre }}">
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" rows="3"
                              name="descripcion">{{ $cup->descripcion }}</textarea>
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="precio">Precio</label>
                    <input type="number" class="form-control" placeholder="Ingrese el Precio"
                           id="precio" name="precio" value="{{ $cup->precio }}">
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="categoria">Categoría</label>
                    <select class="form-control" id="categoria" name="categoria">
                        <option value="0" class="text-muted">Seleccione una categoría</option>
                        @foreach($cats as $cat)
                            <option value="{{ $cat->id }}"
                            {{ $cup->categoria->id == $cat->id ? 'selected' : '' }}
                            >{{ $cat->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="imagen">Imagen</label>
                    <input type="file" name="imagen" class="form-control-file " id="imagen" aria-describedby="fileHelp">
                    <small id="imagenHelp" class="form-text text-success">
                        Seleccione una imagen
                    </small>
                </div>

                <input type='hidden' name="id" value="{{ $cup->id}}">
                @csrf
                <div>
                    <button type="submit" class="btn btn-success" style="width: 150px">Guardar</button>
                    <a role="button" href="{{ route('cupones.index') }}" class="btn btn-info"
                       style="width: 150px">Cancelar</a>
                </div>

            </fieldset>
        </form>
    </div>


@endsection