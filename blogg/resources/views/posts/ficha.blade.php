@extends('plantilla')

@section('titulo', 'Ficha post')

@section('contenido')
    <h1>Ficha del post {{ $id }}</h1>
    <p>Detalles del post con ID: {{ $id }}</p>
@endsection
