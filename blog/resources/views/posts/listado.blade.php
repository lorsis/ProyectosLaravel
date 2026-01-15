@extends('plantilla')

@section('contenido')
    @include('partials.nav')
    <h2>Listado de Posts</h2>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts_ficha', $post['id']) }}">{{ $post['titulo'] }}</a>
            </li>
        @endforeach
    </ul>
@endsection
