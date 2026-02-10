@extends('plantilla')

@section('titulo', 'Login')

@section('contenido')
<div class="container">
    <div class="card shadow p-4 col-12 col-sm-8 col-md-6 col-lg-4 mx-auto mt-5">
        <h3 class="card-title mb-4 text-center">Iniciar sesión</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.attempt') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Usuario</label>
                <input type="email" 
                       class="form-control" 
                       name="email" 
                       id="email" 
                       value="{{ old('email') }}" 
                       placeholder="Tu email" 
                       required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" 
                       class="form-control" 
                       name="password" 
                       id="password" 
                       placeholder="Tu contraseña" 
                       required>
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Iniciar sesión</button>
            </div>

            <div class="text-center">
                <small>Usuari: <strong>admin@admin.com</strong> | Contrasenya: <strong>admin</strong></small>
            </div>
        </form>
    </div>
</div>
@endsection
