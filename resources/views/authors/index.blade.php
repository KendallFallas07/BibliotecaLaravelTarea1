@extends('layouts.app')

@section('title', 'Lista de autores')

@section('content')
    <h2>Lista de autores</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Año de nacimiento</th>
                <th>Campos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author['id'] }}</td>
                    <td>
                        <a href="{{ route('authors.show', $author['id']) }}">
                            {{ $author['name'] }}
                        </a>
                    </td>
                    <td>{{ $author['nationality'] }}</td>
                    <td>{{ $author['birth_year'] }}</td>
                    <td>{{ $author['fields'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection