@extends('plantilla')

@section('titulo', 'Ficha Post')

@section('contenido')
    <h1>Ficha del post {{ $id }}</h1>
    <p>Contenido del post número {{ $id }}.</p>
@endsection
