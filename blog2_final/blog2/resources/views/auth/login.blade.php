@extends('plantilla')

@section('titulo', 'Login')

@section('contenido')
<div class="container">
    <div class="card shadow-lg p-4 col-12 col-sm-8 col-md-6 col-lg-4 mx-auto mt-5">
        <h3 class="card-title mb-4 text-center">Iniciar sesión</h3>

        @if($errors->any())
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.attempt') }}">
            @csrf

            <div class="form-floating mb-3">
                <label for="email">Usuario:</label>
                <input type="email" 
                       class="form-control" 
                       name="email" 
                       id="email" 
                       value="{{ old('email') }}" 
                       placeholder="Tu email" 
                       required>
            </div>

            <div class="form-floating mb-3">
                <label for="password">Contraseña:</label>
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

            

            <div class="card-footer bg-light pt-3">
                <h6 class="text-center mb-2">Usuarios de prueba</h6>
                <ul class="list-unstyled small mb-0 text-center">
                    <li>admin@admin.com | admin</li>
                    <li>Noerodriguez@gmail.com | 123456</li>
                    <li>Evagg91@gmail.com | 123456</li>
                    <li>andreusis28@gmail.com | 123456</li>
                </ul>
            </div>
        </form>
    </div>
</div>
@endsection
