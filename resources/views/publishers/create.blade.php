@extends('layouts.app')

@section('title', 'Nueva editorial')

@section('content')
    <div class="container">
        <h2 class="mb-4">Nueva editorial</h2>

        <form action="{{ route('publishers.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">País</label>
                <input type="text" name="country" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Fundación</label>
                <input type="number" name="founded" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Género</label>
                <input type="text" name="genere" class="form-control">
            </div>

            <button class="btn btn-success">Guardar</button>
            <a href="{{ route('publishers.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection