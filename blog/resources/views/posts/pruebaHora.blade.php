@extends('plantilla')

@section('titulo', 'Prueba Helper')

@section('contenido')
    <div class="container mt-4">
        <h1>Prueba Helper</h1>
        <p>La hora actual es: <strong>{{ $hora }}</strong></p>
        <a href="{{ route('inicio') }}" class="btn btn-primary">Volver al inicio</a>
    </div>
@endsection
