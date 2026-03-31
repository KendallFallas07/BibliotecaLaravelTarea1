@extends('layouts.app')

@section('title', 'Libros')

@section('content')
    <div class="container">
        <a href="{{ route('books.create') }}" class="btn btn-success mb-3">
            Nuevo libro
        </a>

        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Edición</th>
                    <th>Copyright</th>
                    <th>Idioma</th>
                    <th>Páginas</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>

                        <td>
                            <a href="{{ route('books.show', $book) }}">
                                {{ $book->title }}
                            </a>
                        </td>

                        <td>{{ $book->edition }}</td>
                        <td>{{ $book->copyright }}</td>
                        <td>{{ $book->language }}</td>
                        <td>{{ $book->pages }}</td>

                        <td>
                            <a href="{{ route('authors.show', $book->author) }}">
                                {{ $book->author->name }}
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('publishers.show', $book->publisher) }}">
                                {{ $book->publisher->name }}
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning d-flex justify-content-center">
                                ✏️ Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection