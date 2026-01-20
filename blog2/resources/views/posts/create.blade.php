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
                            <label for="title" class="form-label">Título:</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Escribe el título">
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Contenido:</label>
                            <textarea name="content" id="content" class="form-control" rows="5" placeholder="Escribe el contenido"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary ms-2">Volver al listado</a>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
