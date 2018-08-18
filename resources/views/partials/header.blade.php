<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand"
        @guest
            href="{{ route('principal') }}">
        @else
            href="{{ route('admin.index') }}">
        @endguest
        <b>Ecomonedas</b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('centros-de-acopio') }}"><b>Centros de Acopio</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('materiales-de-reciclaje') }}"><b>Materiales de Reciclaje</b></a>
                </li>
            @else
                @auth()
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <b>Administrar</b>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item text-success"
                               href="{{ route('centro.index') }}">Centros de Acopio</a>
                            <a class="dropdown-item text-success"
                               href="{{ route('materiales.index') }}">Materiales Reciclables</a>
                            <a class="dropdown-item text-success"
                               href="{{ route('cupones.index') }}">Cupones de Canje</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('usuarios.index') }}"><b>Gestión Administradores</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('usuarios.listado') }}"><b>Listado Clientes</b></a>
                    </li>
                @endauth
            @endguest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('otros.acerca') }}"><b>Acerca de</b></a>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="btn btn-outline-light" href="{{ route('login') }}"
                   role="button" style="width: 150px; margin-right: 10px"><b>Ingresar</b></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-light" href="{{ route('register') }}"
                   role="button" style="width: 150px"><b>Registrarse</b></a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" v-pre style="margin-right: 100px">
                    <b>{{ Auth::user()->name }}</b> <span class="caret"></span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item text-success" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                </div>
            </li>
        @endguest
    </ul>
</nav>
