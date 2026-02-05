<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">Blog</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">Listado de posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.create') }}">Nuevo post</a>
                </li>
                @if(auth()->check()) <li class="{{ setActivo('posts.create') }} nav-item"> <a class="nav-link" href="{{ route('posts.create') }}">Nuevo post</ </li> @endif 
                @if(auth()->check()) <li class="{{ setActivo('posts.create') }} nav-item"> <a class="nav-link" href="{{ route('posts.create') }}">Nuevo post</ </li> <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}">Logout</a> </li> @endif 
            </ul>
        </div>
    </div>
</nav>
