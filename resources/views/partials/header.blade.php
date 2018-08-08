<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('principal') }}">Ecomonedas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('centros-de-acopio') }}">Centros de Acopio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Materiales de Reciclaje</a>
            </li>
            @auth()
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">Administrar</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-success" href="{{ route('centro.index') }}">Centros de Acopio</a>
                        <a class="dropdown-item text-success" href="#">Materiales Reciclables</a>
                        <a class="dropdown-item text-success" href="#">Cupones de Canje</a>
                        <a class="dropdown-item text-success" href="#">Usuarios Registrados</a>
                    </div>
                </li>
            @endauth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('otros.acerca') }}">Acerca de</a>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item active"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
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
