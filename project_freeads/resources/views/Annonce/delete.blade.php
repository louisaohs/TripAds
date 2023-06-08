@extends('layouts.main')

@section('title', 'Supprimer mon annonce')

@section('content')

<div class="container-store">
    <div class="sub-store">
        <h1>Cette annonce a été supprimée.</h1>
        <br />
        <div>
            <a href="{{ route('Annonce.index') }}" class="links-store">Retour à ma liste d'annonces ↲</a>
        </div>
    </div>
</div>

@endsection