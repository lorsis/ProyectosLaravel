@extends('plantilla')

@section('titulo', 'Ficha Post')

@section('contenido')
    <h1>Ficha del post {{ $post }}</h1>
    <p>Contenido del post número {{ $post }}.</p>
@endsection
