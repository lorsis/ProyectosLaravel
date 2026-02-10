@extends('plantilla')

@section('titulo', 'Listado de Posts')

@section('contenido')
<div class="container mt-3">

    <h1>Listado de Posts</h1>

    <!-- Botón crear -->
    @auth
        <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Crear</a>
    @endauth

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
                    <td>{{ \Illuminate\Support\Str::limit($post->contenido, 50) }}</td>
                    <td>{{ $post->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $post->updated_at->format('d/m/Y H:i') }}</td>
                    <td>

                        <!-- Ver siempre -->
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">
                            Ver
                        </a>

                        @auth
                            @if(auth()->user()->rol === 'admin' || $post->usuario_id === auth()->id())

                                <!-- Editar -->
                                <a href="{{ route('posts.edit', $post->id) }}" 
                                   class="btn btn-warning btn-sm">
                                    Editar
                                </a>

                                <!-- Borrar -->
                                <form action="{{ route('posts.destroy', $post->id) }}" 
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('¿Seguro que quieres borrar este post?')">
                                        Eliminar
                                    </button>
                                </form>

                            @endif
                        @endauth

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <!-- Paginación -->
    <div class="mt-3">
        {{ $posts->links('pagination::bootstrap-5') }}
    </div>

</div>
@endsection
