@extends('layouts.app')

@section('title', $book->title)

@section('content')
    <div class="container">
        <h2 class="mb-4">Detalle del libro</h2>

        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $book->id }}</p>
                <p><strong>Título:</strong> {{ $book->title }}</p>
                <p><strong>Edición:</strong> {{ $book->edition }}</p>
                <p><strong>Copyright:</strong> {{ $book->copyright }}</p>
                <p><strong>Idioma:</strong> {{ $book->language }}</p>
                <p><strong>Páginas:</strong> {{ $book->pages }}</p>

                <p>
                    <strong>Autor:</strong>
                    <a href="{{ route('authors.show', $book->author) }}">
                        {{ $book->author->name }}
                    </a>
                </p>

                <p>
                    <strong>Editorial:</strong>
                    <a href="{{ route('publishers.show', $book->publisher) }}">
                        {{ $book->publisher->name }}
                    </a>
                </p>
            </div>
        </div>

        <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">
            Volver a libros
        </a>
    </div>
@endsection