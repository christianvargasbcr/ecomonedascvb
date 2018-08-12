@extends('layouts.master')

@section('titulo','Crear Material de Reciclaje')

@section('contenido')
    @include('partials.errors')
    <br>
    <div class="container text-success" style="display: block;margin-left: auto;margin-right: auto; width: 60%">
        <form action="{{ route('materiales.create') }}" method="post" enctype="multipart/form-data" >
            <fieldset>

                <legend class="text-success">Crear Material de Reciclaje</legend>

                <div class="form-group">
                    <label class="col-form-label" for="nombre">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="precio">Precio</label>
                    <input type="number" class="form-control" placeholder="Precio" id="precio" name="precio">
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="color">Color</label>
                    <div id="cp2" class="input-group colorpicker colorpicker-component col-6">
                        <input type="text" name="color" id="color" value="#32b478" class="form-control"/>
                        <label for="color" class="input-group-addon display-block">
                            <i style="height: 100%; width: 40px; margin-left: 5px"></i>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="imagen">Imagen</label>
                    <input type="file" name="imagen" class="form-control-file " id="imagen" aria-describedby="fileHelp">
                    <small id="imagenHelp" class="form-text text-success">
                        Seleccione una imagen
                    </small>
                </div>

                @csrf
                <div>
                    <button type="submit" class="btn btn-success" style="width: 150px">Crear</button>
                    <a role="button" href="{{ route('materiales.index') }}" class="btn btn-info"
                       style="width: 150px">Cancelar</a>
                </div>

            </fieldset>
        </form>
    </div>
    <script type="text/javascript">
        $('.colorpicker').colorpicker();
    </script>
@endsection
