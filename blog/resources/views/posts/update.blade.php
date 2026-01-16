<form action="{{ route('posts_update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="titulo" value="{{ old('titulo', $post->titulo) }}" required>
    <textarea name="contenido" required>{{ old('contenido', $post->contenido) }}</textarea>

    <button type="submit">Actualizar post</button>
</form>
