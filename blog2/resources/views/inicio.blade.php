@extends('plantilla')

@section('titulo', 'Inicio')

@section('contenido')
<h1>Pagina de Inicio</h1>
<h2>Blog de Lorena</h2>
<p>Bienvenido a nuestra pagina de inicio.</p>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Tancar sessió</button>
</form>
@endsection