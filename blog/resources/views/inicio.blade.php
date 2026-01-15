@extends('plantilla')

@section('contenido')
    @include('partials.nav')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h1 class="card-title mb-3">
                            Bienvenido <span class="text-primary">{{ $nombre }}</span>
                        </h1>
                        <p class="card-text fs-5 text-muted">
                            Esta es la página principal de tu blog.
                        </p>
                        <a href="{{ route('posts_listado') }}" class="btn btn-primary mt-3">
                            Ir al blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
