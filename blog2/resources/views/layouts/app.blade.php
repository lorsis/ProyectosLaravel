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
        <ul>
            @guest
                <a href="{{ route('login') }}">Login</a>
            @else
                <span>{{ Auth::user()->login }}</span>

                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    style="color:blue; text-decoration:underline; cursor:pointer;">
                    Cerrar sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </ul>
    </nav>

    @auth
        <a href="{{ route('posts.create') }}">Crear Post</a>
    @endauth
</body>

</html>
