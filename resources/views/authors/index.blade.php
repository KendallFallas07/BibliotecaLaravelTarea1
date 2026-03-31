@extends('layouts.app')

@section('title', 'Autores')

@section('content')
<div class="container">
    <a href="{{ route('authors.create') }}" class="btn btn-success mb-3">
        Nuevo autor
    </a>

    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Año nacimiento</th>
                <th>Campos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>

                    <td>
                        <a href="{{ route('authors.show', $author) }}">
                            {{ $author->name }}
                        </a>
                    </td>

                    <td>{{ $author->nationality }}</td>
                    <td>{{ $author->birth_year }}</td>
                    <td>{{ $author->fields }}</td>

                    <td>
                        <a href="{{ route('authors.edit', $author) }}"
                           class="btn btn-sm btn-warning d-flex justify-content-center">
                            ✏️ Editar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection