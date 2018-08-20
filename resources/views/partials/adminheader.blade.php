@if(Auth::user()->role_id === 1)
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
@endif
@if(Auth::user()->role_id === 2)
    <li class="nav-item">
        <a class="nav-link" href="{{ route('canjes.create') }}"><b>Registrar Canje</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('canjes.index') }}"><b>Historial</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><b>Reportes</b></a>
    </li>
@endif
@if(Auth::user()->role_id === 3)
    <li class="nav-item">
        <a class="nav-link" href="#"><b>Billetera Electrónica</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('cupones-disponibles') }}"><b>Canjear Ecomonedas</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ciente.historial-canjes') }}"><b>Historial de Canjes</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><b>Historial de Compras</b></a>
    </li>
@endif