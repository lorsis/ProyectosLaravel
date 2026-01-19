@extends('plantilla')

@section('titulo', 'Ficha del Post')

@section('contenido')
<h1>{{ $post->titulo }}</h1>
<p>{{ $post->contenido }}</p>
<p class="text-muted">Creado: {{ $post->created_at->format('d/m/Y') }}</p>
@endsection
