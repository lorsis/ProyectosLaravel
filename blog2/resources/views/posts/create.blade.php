@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Crear nuevo post</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título:</label>
                                <input type="text" name="titulo" id="titulo"
                                    class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $post->titulo) }}"
                                    placeholder="Escribe el título">
                                @error('titulo')
                                    <div class="invalid-feedback">
                                        {{ $message }}

                                    </div>

                                    <div class="mb-3">
                                        <label for="contenido" class="form-label">Contenido:</label>
                                        <textarea name="contenido" class="form-control @error('contenido') is-invalid @enderror" rows="5">{{ old('contenido', $post->contenido) }}</textarea>

                                        @error('contenido')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <a href="{{ route('posts.index') }}" class="btn btn-secondary ms-2">Volver al
                                            listado</a>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
