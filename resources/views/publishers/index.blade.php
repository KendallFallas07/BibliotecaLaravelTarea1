@extends('layouts.app')

@section('title', 'Lista de editoriales')

@section('content')
    <h2>Lista de editoriales</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>País</th>
                <th>Fundación</th>
                <th>Género</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publishers as $publisher)
                <tr>
                    <td>{{ $publisher['id'] }}</td>
                    <td>
                        <a href="{{ route('publishers.show', $publisher['id']) }}">
                            {{ $publisher['name'] }}
                        </a>
                    </td>
                    <td>{{ $publisher['country'] }}</td>
                    <td>{{ $publisher['founded'] }}</td>
                    <td>{{ $publisher['genere'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection