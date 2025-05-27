@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1 class="mb-4">Gestion des Catégories</h1>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Ajouter une catégorie</a>

    <table class="table table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $categorie)
            <tr>
                <td>{{ $categorie->id }}</td>
                <td>{{ $categorie->name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $categorie) }}" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="{{ route('categories.destroy', $categorie) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cette catégorie ?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="3" class="text-center">Aucune catégorie trouvée.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $categories->links() }}
</div>
@endsection