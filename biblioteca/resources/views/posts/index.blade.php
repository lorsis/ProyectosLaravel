<!DOCTYPE html>
<html>

<head>

    <title>Listado de Posts</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <h1>Listado de Posts</h1>
    <p>Aquí aparecerá la lista de tus posts.</p>

  <h1>Listado de Posts</h1>

    <ul>
        @foreach($posts as $post)
            <li>{{ $post['titulo'] }} - {{ $post['autor'] }}</li>
        @endforeach
    </ul>

</body>

</html>
