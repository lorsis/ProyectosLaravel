<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h3 class="card-title text-center mb-3">Iniciar sesión</h3>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="login" class="form-label">Usuario</label>
                    <input type="text" name="login" id="login" class="form-control" placeholder="Tu usuario"
                        required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="Tu contraseña" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
            </form>


        </div>
    </div>
</body>

</html>
