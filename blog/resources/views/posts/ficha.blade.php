@extends('plantilla')

@section('contenido')
    @include('partials.nav')
    <h2>Detalle del Post {{ $id }}</h2>
    <p>Aquí iría la información completa del post.</p>
@endsection
