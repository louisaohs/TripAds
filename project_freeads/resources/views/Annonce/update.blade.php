@extends('layouts.main')

@section('title', 'Modification de votre annonce')

@section('content')

<div>
    <h1>Félicitation ! Vos données de votre annonce ont été modifiées.</h1>
    <p>Pour les visualiser, vous n'avez qu'à cliquer ci-dessus.</p>
    <a href="{{ route('Annonce.index') }}" class="links-store">Retour à ma liste d'annonces ↲</a>
</div>

@endsection