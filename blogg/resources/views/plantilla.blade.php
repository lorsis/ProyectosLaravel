<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.nav') <!-- Incluye la barra de navegación -->

    <div class="container mt-4">
        @yield('contenido') <!-- Aquí se mostrará el contenido específico -->
    </div>
</body>
</html>
