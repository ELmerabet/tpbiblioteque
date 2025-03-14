@extends('layouts.app')

@section('content')
<h2>Confirmer la suppression</h2>

<p>Voulez-vous vraiment supprimer le livre <strong>{{ $livre->titre }}</strong> ?</p>

<form action="{{ route('livres.destroy', $livre) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Oui, supprimer</button>
</form>

<a href="{{ route('livres.index') }}">Annuler</a>
@endsection
