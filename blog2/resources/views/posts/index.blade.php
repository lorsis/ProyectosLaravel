@extends('plantilla')

@section('titulo', 'Listado de Posts')

@section('contenido')
<div class="container mt-3">
    <h1>Listado de Posts</h1>

    <!-- Botón para crear post de prueba -->
    <a href="{{ url('/posts/nuevoPrueba') }}" class="btn btn-success mb-3">Crear post de prueba</a>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Usuario</th>
                <th>Contenido</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->titulo }}</td>
                <td>{{ $post->usuario->name ?? 'Sin usuario' }}</td>
                <td>{{ Str::limit($post->contenido, 50) }}</td>
                <td>{{ $post->created_at->format('d/m/Y H:i') }}</td>
                <td>{{ $post->updated_at->format('d/m/Y H:i') }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">Ver</a>

                    <!-- Formulario para borrar -->
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Borrar</button>
                    </form>

                    <!-- Botón para editar prueba -->
                    <a href="{{ url('/posts/editarPrueba/' . $post->id) }}" class="btn btn-warning btn-sm">Editar Prueba</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    <div>
        {{ $posts->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
