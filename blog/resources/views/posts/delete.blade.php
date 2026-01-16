<form action="{{ route('posts_destroy', $post) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('¿Seguro que quieres borrar este post?')">Eliminar</button>
</form>
