@extends('layouts.app')

@section('title', 'Nuevo autor')

@section('content')
    <div class="container">
        <h2 class="mb-4">Nuevo autor</h2>

        <form action="{{ route('authors.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nacionalidad</label>
                <input type="text" name="nationality" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Año de nacimiento</label>
                <input type="number" name="birth_year" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Campos</label>
                <input type="text" name="fields" class="form-control">
            </div>

            <button class="btn btn-success">Guardar</button>
            <a href="{{ route('authors.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection