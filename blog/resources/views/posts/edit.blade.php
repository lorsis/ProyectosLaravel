@extends('plantilla')

@section('contenido')
    @include('partials.nav')
    <h2>Editar Post {{ $id }}</h2>
    <p>Formulario de edición de post.</p>
@endsection
