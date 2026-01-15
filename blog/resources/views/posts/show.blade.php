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
</nav>@extends('plantilla')

@section('titulo', 'Ficha post')

@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title mb-3">
                             Ficha del post {{ $post->id }}
                        </h1>

                        <p class="card-text fs-5">
                            {{ $post->contenido }}
                        </p>

                        <hr>

                        <p class="text-muted mb-0">
                            <small>
                                 Creado: {{ $post->created_at->format('d/m/Y H:i') }}
                            </small>
                        </p>

                        <a href="{{ route('posts_listado') }}" class="btn btn-outline-primary mt-3">
                            Volver al listado
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
