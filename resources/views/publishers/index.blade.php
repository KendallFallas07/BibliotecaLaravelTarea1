@extends('layouts.app')

@section('title', 'Editoriales')

@section('content')
<div class="container">
    <a href="{{ route('publishers.create') }}" class="btn btn-success mb-3">
        Nueva editorial
    </a>

    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>País</th>
                <th>Fundación</th>
                <th>Género</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($publishers as $publisher)
                <tr>
                    <td>{{ $publisher->id }}</td>

                    <td>
                        <a href="{{ route('publishers.show', $publisher) }}">
                            {{ $publisher->name }}
                        </a>
                    </td>

                    <td>{{ $publisher->country }}</td>
                    <td>{{ $publisher->founded }}</td>
                    <td>{{ $publisher->genere }}</td>

                    <td>
                        <a href="{{ route('publishers.edit', $publisher) }}"
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