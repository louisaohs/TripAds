@extends('layouts.welcome')

@section('title', 'Bienvenue dans TripAds')

@section('content')

<!-- homepage -->
<div class="container-homepage">
    <div class="sub-homepage">
        <div class="line-home">
            <h1 class="title-homepage">Bienvenue dans TripAds</h1>
            <p class="info-homepage">Votre première application dédiée à la gestion d'annonces de tous vos voyages !</p>
            <br />
            <!-- links -->
            <div class="links-homepage">
               <button><a href="{{ route('Annonce.index') }}" class="links">Je profite dès maintenant</a> </button> |
               <button><a href="{{ route('register') }}" class="links">Je m'inscris</a></button>
            </div>
        </div>
    </div>
</div>

@endsection