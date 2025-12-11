<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    @include('partials.nav')

    <div class="contenido">
        @yield('contenido')
    </div>
</body>
</html>
