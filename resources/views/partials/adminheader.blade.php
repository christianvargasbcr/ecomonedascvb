<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
        <b>Usuarios</b>
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item text-success"
           href="{{ route('usuarios.index') }}">Administradores</a>
        <a class="dropdown-item text-success"
           href="{{ route('usuarios.listado') }}">Listado Clientes</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
        <b>Centros de Acopio</b>
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item text-success"
           href="{{ route('centro.index') }}">Administrar</a>
        <a class="dropdown-item text-success"
           href="{{ route('centro.index') }}">Reportes</a>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('materiales.index') }}"><b>Materiales</b></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('cupones.index') }}"><b>Cupones</b></a>
</li>
