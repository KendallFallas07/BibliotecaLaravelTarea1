@extends('layouts.app')

@section('title', 'Nuevo libro')

@section('content')
    <div class="container">
        <h2 class="mb-4">Nuevo libro</h2>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Edición</label>
                <input type="text" name="edition" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Copyright</label>
                <input type="number" name="copyright" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Idioma</label>
                <input type="text" name="language" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Páginas</label>
                <input type="number" name="pages" class="form-control">
            </div>

            <!-- SELECT AUTOR -->
            <div class="mb-3">
                <label class="form-label">Autor</label>
                <select name="author_id" class="form-select" required>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- SELECT EDITORIAL -->
            <div class="mb-3">
                <label class="form-label">Editorial</label>
                <select name="publisher_id" class="form-select" required>
                    @foreach ($publishers as $publisher)
                        <option value="{{ $publisher->id }}">
                            {{ $publisher->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success">Guardar</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection