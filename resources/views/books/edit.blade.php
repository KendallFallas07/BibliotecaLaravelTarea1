@extends('layouts.app')

@section('title', 'Editar libro')

@section('content')
    <div class="container">
        <h2 class="mb-4">Editar libro</h2>

        <form action="{{ route('books.update', $book) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Edición</label>
                <input type="text" name="edition" class="form-control" value="{{ $book->edition }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Copyright</label>
                <input type="number" name="copyright" class="form-control" value="{{ $book->copyright }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Idioma</label>
                <input type="text" name="language" class="form-control" value="{{ $book->language }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Páginas</label>
                <input type="number" name="pages" class="form-control" value="{{ $book->pages }}">
            </div>

            <!-- SELECT AUTOR -->
            <div class="mb-3">
                <label class="form-label">Autor</label>
                <select name="author_id" class="form-select">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- SELECT EDITORIAL -->
            <div class="mb-3">
                <label class="form-label">Editorial</label>
                <select name="publisher_id" class="form-select">
                    @foreach ($publishers as $publisher)
                        <option value="{{ $publisher->id }}" {{ $book->publisher_id == $publisher->id ? 'selected' : '' }}>
                            {{ $publisher->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary">Actualizar</button>
            <a href="{{ route('books.show', $book) }}" class="btn btn-secondary">
                Cancelar
            </a>
        </form>
    </div>
@endsection