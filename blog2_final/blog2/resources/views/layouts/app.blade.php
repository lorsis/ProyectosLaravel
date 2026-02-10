<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav>
        @if(Auth::check())
            <a href="{{ route('logout') }}">Cerrar sesión</a>
            <a href="{{ route('posts.create') }}">Crear Post</a>
        @endif
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
