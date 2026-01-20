<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- si usas Laravel Mix -->
</head>
<body>
    <div class="container">
        @yield('content') <!-- aquí se inyectan las vistas -->
    </div>
</body>
</html>
