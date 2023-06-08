@extends('layouts.main')

@section('title', 'Enregistration de votre annonce')

@section('content')

<div class="container-store">
    <div class="sub-store">
        <div class="line-store">
            <h1>Félicitation ! Votre annonce a été enregistrée.</h1>
        </div>
        <div class="line-store">
            <p>Pour la visualiser, vous n'avez qu'à cliquer dans le lien ci-dessus.</p>
        </div>
        <a href="{{ route('Annonce.index') }}" class="links-store">Retour à ma liste d'annonces ↲</a>
    </div>
</div>

@endsection