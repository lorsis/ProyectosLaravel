@extends('plantilla')

@section('titulo', 'Listado posts')

@section('contenido')
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('inicio') }}">Mi Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts_listado') }}">Listado de posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prueba_helper') }}">Prueba Helper</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">


        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Listado de posts</h1>
            <a href="{{ route('posts_create') }}" class="btn btn-success">
                <i class="bi bi-plus-lg"></i> Crear nuevo post
            </a>
        </div>
<div class="mb-3">
    <small class="text-muted">Fecha y hora actual: {{ $fechaHora }}</small>
</div>
        <p class="mb-4">Vista de ejemplo (sesión 3). Aquí listaremos posts reales en sesiones posteriores.</p>

        @if ($posts->isEmpty())
            <div class="alert alert-info">No hay posts</div>
        @else
            <table class="table table-striped table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>Título</th>
                        <th>Usuario</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->titulo }}</td>
                            <td>{{ optional($post->usuario)->login }}</td>
                            <td class="text-center">
                                <a href="{{ route('posts_ficha', $post) }}" class="btn btn-sm btn-info me-1">
                                    <i class="bi bi-eye"></i> Ver
                                </a>

                                <a href="{{ route('posts_edit', $post) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                <form action="{{ route('posts_destroy', $post) }}" method="POST" style="display:inline"
                                    onsubmit="return confirm('¿Seguro que quieres eliminar este post?');">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i> Borrar
                                    </button>
                                </form>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Paginación estilo Bootstrap --}}
            @if (method_exists($posts, 'links'))
                <nav aria-label="Page navigation example">
                    {{ $posts->links('pagination::bootstrap-5') }}
                </nav>
            @endif
        @endif
    </div>
@endsection
