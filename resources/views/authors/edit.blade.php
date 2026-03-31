@extends('layouts.app')

@section('title', 'Editar autor')

@section('content')
    <div class="container">
        <h2 class="mb-4">Editar autor</h2>

        <form action="{{ route('authors.update', $author) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ $author->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nacionalidad</label>
                <input type="text" name="nationality" class="form-control" value="{{ $author->nationality }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Año de nacimiento</label>
                <input type="number" name="birth_year" class="form-control" value="{{ $author->birth_year }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Campos</label>
                <input type="text" name="fields" class="form-control" value="{{ $author->fields }}">
            </div>

            <button class="btn btn-primary">Actualizar</button>
            <a href="{{ route('authors.show', $author) }}" class="btn btn-secondary">
                Cancelar
            </a>
        </form>
    </div>
@endsection