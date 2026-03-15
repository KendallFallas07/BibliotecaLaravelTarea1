@extends('layouts.app')

@section('title', $publisher['name'])

@section('content')
    <h2>Detalle de la editorial</h2>

    <div class="card">
        <p><strong>ID:</strong> {{ $publisher['id'] }}</p>
        <p><strong>Nombre:</strong> {{ $publisher['name'] }}</p>
        <p><strong>País:</strong> {{ $publisher['country'] }}</p>
        <p><strong>Fundación:</strong> {{ $publisher['founded'] }}</p>
        <p><strong>Género:</strong> {{ $publisher['genere'] }}</p>

        <h3>Libros publicados</h3>
        <ul>
            @foreach ($publisher['books'] as $book)
                <li>
                    <a href="{{ route('books.show', $book['book_id']) }}">
                        {{ $book['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <p><a href="{{ route('publishers.index') }}">Volver a editoriales</a></p>
@endsection