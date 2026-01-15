@extends('plantilla')

@section('contenido')
    @include('partials.nav')
          <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title mb-4">
                             Crear nuevo post
                        </h2>

                       <form action="{{ route('posts_store') }}" method="POST">

                            @csrf

                            <div class="mb-3">
                                <label for="titulo" class="form-label fw-semibold">
                                    Título
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="titulo"
                                    name="titulo"
                                    placeholder="Introduce el título del post"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label for="contenido" class="form-label fw-semibold">
                                    Contenido
                                </label>
                                <textarea
                                    class="form-control"
                                    id="contenido"
                                    name="contenido"
                                    rows="6"
                                    placeholder="Escribe el contenido del post"
                                    required
                                ></textarea>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('posts_listado') }}" class="btn btn-outline-secondary">
                                    Cancelar
                                </a>

                                <button type="submit" class="btn btn-primary">
                                     Guardar post
                                </button>
                            </div>
                        </form>
@endsection

