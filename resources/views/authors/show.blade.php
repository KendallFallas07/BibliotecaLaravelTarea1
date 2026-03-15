@extends('layouts.app')

@section('title', $author['name'])

@section('content')
    <h2>Detalle del autor</h2>

    <div class="card">
        <p><strong>ID:</strong> {{ $author['id'] }}</p>
        <p><strong>Nombre:</strong> {{ $author['name'] }}</p>
        <p><strong>Nacionalidad:</strong> {{ $author['nationality'] }}</p>
        <p><strong>Año de nacimiento:</strong> {{ $author['birth_year'] }}</p>
        <p><strong>Campos:</strong> {{ $author['fields'] }}</p>

        <h3>Libros</h3>
        <ul>
            @foreach ($author['books'] as $book)
                <li>
                    <a href="{{ route('books.show', $book['book_id']) }}">
                        {{ $book['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <p><a href="{{ route('authors.index') }}">Volver a autores</a></p>
@endsection