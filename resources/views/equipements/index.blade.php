@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h2>Liste des équipements</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('equipements.create') }}" class="btn btn-primary mb-3">Ajouter un équipement</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipements as $equipement)
                <tr>
                    <td>{{ $equipement->name }}</td>
                    <td>
                        <a href="{{ route('equipements.edit', $equipement) }}" class="btn btn-warning btn-sm">Modifier</a>

                        <form action="{{ route('equipements.destroy', $equipement) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Confirmer la suppression ?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $equipements->links() }}
</div>
@endsection
