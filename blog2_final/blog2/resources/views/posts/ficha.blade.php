@extends('plantilla')

@section('titulo', 'Ficha del Post')

@section('contenido')
<h1>Ficha del post {{ $id }}</h1>

<!-- Boton para editar -->
<a href="{{ route('posts.edit', $id) }}" class="btn btn-primary mt-3">Editar post</a>
@endsection
