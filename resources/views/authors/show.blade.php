@extends('layouts.app')

@section('title', $author->name)

@section('content')
    <div class="container">
        <h2 class="mb-4">Detalle del autor</h2>

        <div class="card">
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $author->name }}</p>
                <p><strong>Nacionalidad:</strong> {{ $author->nationality }}</p>
                <p><strong>Año de nacimiento:</strong> {{ $author->birth_year }}</p>
                <p><strong>Campos:</strong> {{ $author->fields }}</p>

                <h5 class="mt-4">Libros</h5>

                @if ($author->books->count())
                    <ul>
                        @foreach ($author->books as $book)
                            <li>
                                <a href="{{ route('books.show', $book->id) }}">
                                    {{ $book->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">Este autor no tiene libros registrados.</p>
                @endif
            </div>
        </div>

        <a href="{{ route('authors.index') }}" class="btn btn-secondary mt-3">
            Volver a autores
        </a>
    </div>
@endsection