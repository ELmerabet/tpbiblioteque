@extends('layouts.app')

@section('content')
<h1>Ajouter un livre</h1>
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('livres.store')}}" method="POST">
    @csrf
    <label for="titre">Titre</label>
    <input type="text" name="titre" required>
    <label>Année de publication :</label>
    <input type="date" name="date_publication" required>
     <label>Nombre de pages :</label>
    <input type="number" name="nombre_pages" required>
    <label for="auteur_id">Auteur</label>
    <select name="auteur_id" id="">
        @foreach ($auteurs as $auteur )
            <option value="{{ $auteur->id}}">
                {{ $auteur->nom }} {{ $auteur->prenom }}
            </option>

        @endforeach
    </select>
    <button type="submit">Ajouter</button>
</form>
<a href="{{ route('livres.index')}}">Retour</a>
@endsection
