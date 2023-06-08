@extends('layouts.main')

@section('title', 'Les données de votre annonce')

@section('content')

<div class="container-store">
    <div class="sub-store">
        <h1>Mon annonce de voyage {{$annonce->id}} :</h1>
        <br />
        <ul>
            <li>
                <div class="line-show">
                    <p>Titre : {{$annonce->title}}</p>
                </div>
                <div class="line-show">
                    <p>Description : {{$annonce->description}}</p>
                </div>
                <div class="line-show">
                    <p>Image : {{$annonce->image}}</p>
                </div>
                <div class="line-show">
                    <p>Prix : {{$annonce->price}}€</p>
                </div>
            </li>
        </ul>
        <br />
        <!-- index -->
        <div class="">
            <a href="{{ route('Annonce.index') }}" class="links-store">Retour à ma liste d'annonces ↲</a>
        </div>
    </div>

</div>

@endsection