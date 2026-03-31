@extends('layouts.app')

@section('title', $publisher->name)

@section('content')
    <div class="container">
        <h2 class="mb-4">Detalle de la editorial</h2>

        <div class="card">
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $publisher->name }}</p>
                <p><strong>País:</strong> {{ $publisher->country }}</p>
                <p><strong>Fundación:</strong> {{ $publisher->founded }}</p>
                <p><strong>Género:</strong> {{ $publisher->genere }}</p>

                <h5 class="mt-4">Libros publicados</h5>

                @if ($publisher->books->count())
                    <ul>
                        @foreach ($publisher->books as $book)
                            <li>
                                <a href="{{ route('books.show', $book->id) }}">
                                    {{ $book->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">Esta editorial no tiene libros registrados.</p>
                @endif
            </div>
        </div>

        <a href="{{ route('publishers.index') }}" class="btn btn-secondary mt-3">
            Volver a editoriales
        </a>
    </div>
@endsection