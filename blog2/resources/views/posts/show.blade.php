@extends('plantilla')

@section('titulo', 'Listado de Posts')

@section('contenido')

<div class="container mt-5">
    <!-- Post -->
    <div class="card mb-5 shadow-lg border-0">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">{{ $post->titulo }}</h3>
            <small class="d-block mt-1">Por {{ $post->usuario->name }} - {{ $post->created_at->format('d/m/Y') }}</small>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $post->contenido }}</p>
        </div>
    </div>

    <!-- Comentarios -->
    <h4 class="mb-4">Comentarios ({{ $post->comentarios->count() }})</h4>
    @foreach($post->comentarios as $comentario)
        <div class="card mb-3 shadow-sm border-0">
            <div class="card-body d-flex">
                <!-- Avatar circular con letra inicial -->
                <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center me-3 flex-shrink-0"
                     style="width:50px; height:50px; font-size:1.25rem; font-weight:bold;">
                    {{ strtoupper(substr($comentario->user->name, 0, 1)) }}
                </div>
                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <strong>{{ $comentario->user->name }}</strong>
                        <small class="text-muted">{{ $comentario->created_at->format('d/m/Y') }}</small>
                    </div>
                    <p class="mb-0">{{ $comentario->contenido }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
