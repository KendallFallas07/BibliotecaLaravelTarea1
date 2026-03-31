@extends('layouts.app')

@section('title', 'Editar editorial')

@section('content')
    <div class="container">
        <h2 class="mb-4">Editar editorial</h2>

        <form action="{{ route('publishers.update', $publisher) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ $publisher->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">País</label>
                <input type="text" name="country" class="form-control" value="{{ $publisher->country }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Fundación</label>
                <input type="number" name="founded" class="form-control" value="{{ $publisher->founded }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Género</label>
                <input type="text" name="genere" class="form-control" value="{{ $publisher->genere }}">
            </div>

            <button class="btn btn-primary">Actualizar</button>
            <a href="{{ route('publishers.show', $publisher) }}" class="btn btn-secondary">
                Cancelar
            </a>
        </form>
    </div>
@endsection