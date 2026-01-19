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
                <!-- Aquí afegeixes els enllaços de crear/editar -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.create') }}">Nuevo post</a>
                </li>
                <!-- L'enllaç d'editar normalment apareix dins la vista d'un post concret -->
            </ul>
        </div>
    </div>
</nav>
