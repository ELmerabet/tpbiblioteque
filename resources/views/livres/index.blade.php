@extends('layouts.app')
@section('content')

<h1>Liste des Livres</h1>
<a href="{{ route('livres.create')}}">Ajouter un livre</a>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1">
    <thead >
        <tr>
            <th>Titre</th>
            <th>nombre pages</th>
            <th>Auteur</th>
            <th>Année de publication</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($livres as $livre)
            <tr>
                <td>{{ $livre->titre }}</td>
                <td>{{$livre->nombre_pages}}</td>
                <td><span>{{ $livre->auteur->nom   }}</span> <span>{{$livre->auteur->prenom}}</span></td>
                <td>{{ $livre->annee_publication }}</td>
                <td>
                    <a href="{{ route('livres.show', $livre->id) }}">Voir</a>
                    <a href="{{ route('livres.edit', $livre->id) }}">Modifier</a>
                    <form action="{{ route('livres.destroy', $livre->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $livres->links() }}
@endsection
