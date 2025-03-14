@extends('layouts.app')
@section('content')
<h1>Modifier le livre</h1>
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('livres.update', $livre)}}" method="POST">
    @csrf
    @method('PUT')
    <label>Titre :</label>
    <input type="text" name="titre" value="{{ $livre->titre }}" required>
    <label>Année de publication :</label>
    <input type="date" name="date_publication" value="{{ $livre->date_publication }}" required>
    <label>Nombre de pages :</label>
    <input type="number" name="nombre_pages" value="{{ $livre->nombre_pages }}" required>
    <label>Auteur :</label>
    <select name="auteur_id">
        @foreach($auteurs as $auteur)
            <option value="{{ $auteur->id }}" {{ $livre->auteur_id == $auteur->id ? 'selected' : '' }}>
                {{ $auteur->nom }} {{ $auteur->prenom }}
            </option>
        @endforeach
    </select>
    <button type="submit">Modifier</button>


</form>
<a href="{{ route('livres.index')}}">Retour</a>
@endsection
