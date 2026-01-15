@foreach($posts as $post)
    <h2>{{ $post->titulo }}</h2>
    <p>{{ $post->contenido }}</p>
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @method('DELETE')
        @csrf
        <button>Borrar</button>
    </form>
@endforeach
