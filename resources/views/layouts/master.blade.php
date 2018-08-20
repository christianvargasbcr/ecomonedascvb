<!DOCTYPE html>
<html>
    <head>
        @include('partials.head')
    </head>
    <body style="background-color: #e0f2f1; margin-bottom: 100px;">
        <header>
            @include('partials.header')
        </header>
        <div class="container">
            @yield('contenido')
        </div>
        <footer>
            @include('partials.footer')
        </footer>
        <script type="text/javascript" src="{{ URL::to('js/canje.js') }}"></script>
    </body>
</html>