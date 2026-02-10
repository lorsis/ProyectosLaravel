@extends('plantilla')

@section('titulo', 'Ficha del Post')

@section('contenido') <!-- ← abans era 'content', ara coincideix amb el yield -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header bg-warning text-dark">
                    <h3 class="mb-0">Editar post</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('posts.update', $post->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título:</label>
                            <input type="text" name="titulo" class="form-control"
                                value="{{ old('titulo', $post->titulo) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="contenido" class="form-label">Contenido:</label>
                            <textarea name="contenido" class="form-control" rows="5" required>{{ old('contenido', $post->contenido) }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary ms-2">Volver al listado</a>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
