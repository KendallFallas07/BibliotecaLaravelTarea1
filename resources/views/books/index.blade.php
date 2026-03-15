@extends('layouts.app')

@section('title', 'Lista de libros')

@section('content')
    <h2>Lista de libros</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Edición</th>
                <th>Copyright</th>
                <th>Idioma</th>
                <th>Páginas</th>
                <th>Autor</th>
                <th>Editorial</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book['id'] }}</td>
                    <td>
                        <a href="{{ route('books.show', $book['id']) }}">
                            {{ $book['title'] }}
                        </a>
                    </td>
                    <td>{{ $book['edition'] }}</td>
                    <td>{{ $book['copyright'] }}</td>
                    <td>{{ $book['language'] }}</td>
                    <td>{{ $book['pages'] }}</td>
                    <td>
                        <a href="{{ route('authors.show', $book['author_id']) }}">
                            {{ $book['author'] }}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('publishers.show', $book['publisher_id']) }}">
                            {{ $book['publisher'] }}
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection