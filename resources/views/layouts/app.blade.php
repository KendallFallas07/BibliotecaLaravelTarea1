<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Biblioteca Laravel')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        nav a { margin-right: 15px; }
        table { border-collapse: collapse; width: 100%; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        .card { border: 1px solid #ddd; padding: 20px; margin-top: 20px; border-radius: 8px; }
    </style>
</head>
<body>
    <h1>Tarea 1 Programacion Web - Kendall Fallas Mena, 402630177</h1>

    <nav>
        <a href="{{ route('books.index') }}">Libros</a>
        <a href="{{ route('authors.index') }}">Autores</a>
        <a href="{{ route('publishers.index') }}">Editoriales</a>
    </nav>

    <hr>

    @yield('content')
</body>
</html>