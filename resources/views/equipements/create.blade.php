@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h2>Ajouter un équipement</h2>

    <form action="{{ route('equipements.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nom de l'équipement</label>
            <input type="text" name="name" id="name"
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-success">Enregistrer</button>
        <a href="{{ route('equipements.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
