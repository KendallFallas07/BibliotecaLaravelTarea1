@extends('layouts.app')

@section('title', $book['title'])

@section('content')
    <h2>Detalle del libro</h2>

    <div class="card">
        <p><strong>ID:</strong> {{ $book['id'] }}</p>
        <p><strong>Título:</strong> {{ $book['title'] }}</p>
        <p><strong>Edición:</strong> {{ $book['edition'] }}</p>
        <p><strong>Copyright:</strong> {{ $book['copyright'] }}</p>
        <p><strong>Idioma:</strong> {{ $book['language'] }}</p>
        <p><strong>Páginas:</strong> {{ $book['pages'] }}</p>
        <p>
            <strong>Autor:</strong>
            <a href="{{ route('authors.show', $book['author_id']) }}">
                {{ $book['author'] }}
            </a>
        </p>
        <p>
            <strong>Editorial:</strong>
            <a href="{{ route('publishers.show', $book['publisher_id']) }}">
                {{ $book['publisher'] }}
            </a>
        </p>
    </div>

    <p><a href="{{ route('books.index') }}">Volver a libros</a></p>
@endsection