@extends('plantilla')

@section('titulo', 'Ficha del Post')

@section('contenido')
<h1>Ficha del post {{ $id }}</h1>

<!-- Botó per editar aquest post -->
<a href="{{ route('posts.edit', $id) }}" class="btn btn-primary mt-3">Editar post</a>
@endsection
