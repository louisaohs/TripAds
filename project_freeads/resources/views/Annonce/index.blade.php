@extends('layouts.main')

@section('title', 'Les annonces de vos voyages')

@section('content')


<h1 class="title-lists">Liste de toutes vos annonces :</h1>

<div class="container-lists">
    <div class="sub">
        <!-- la création d'une annonce -->
        <div class="line-links">
            <a href="{{ route('Annonce.create') }}" class="links-annonce">Créer une annonce de voyage</a>
        </div>
        <!-- les flitrages -->

        <div class="line-links">
            <a href="http://127.0.0.1:8001/search" class="links-annonce">Recherche une annonce ?</a>
        </div>
    </div>
</div>

<div class="container-annonces">
    <!-- card 1 -->
    <div class="lists-annonces">
        <div class="infos">
            <div class="line">
                <h2>Voyage au japon</h2>
                <br />
                <p>Titre : Découvrez Toyko</p>
                <br />
                <p>Description : Entre traditions et modernité, immergez vous dans la capitale nippone Tokyo au travers de ses quartiers emblématiques.</p>
                <br />
                <img src="/assets/japon.png" alt="logo" class="voyage-japon">
                <br />
                <p class="letter-spacing">Prix : 2600€</p>
            </div>
        </div>
    </div>
    <!-- card 2 -->
    <div class="lists-annonces">
        <div class="infos">
            <div class="line">
                <h2>Voyage en Turquie</h2>
                <br />
                <p>Titre : Découvrez le pays chaleureux</p>
                <br />
                <p>Description : Blotti dans une péninsule protégée, au-dessus des eaux cristallines de la mer Egée. Un joyau intimiste qui brille sous le soleil de Turquie.</p>
                <br />
                <img src="/assets/turquie.png" alt="logo" class="voyage-japon">
                <br />
                <p class="letter-spacing">Prix : 4600€</p>
            </div>
        </div>
    </div>
    <!-- card 3 -->
    <div class="lists-annonces">
        <div class="infos">
            <div class="line">
                <h2>Voyage en Espagne</h2>
                <br />
                <p>Titre : Au coeur de l'ambiance</p>
                <br />
                <p>Description : Partez en Espagne en famille : encadrement inclus et séjour offert jusqu'à 6 ans. Séjours Tout Compris. Sport et Détente. Spécialités culinaires.</p>
                <br />
                <img src="/assets/espagne.png" alt="logo" class="voyage-japon">
                <br />
                <p class="letter-spacing">Prix : 1600€</p>
            </div>
        </div>
    </div>

    <!-- foreach : -->
    @foreach ($annonces as $key => $annonce)

    <div class="lists-annonces">

        <div class="infos">

            <div class="line">
                <h2>Annonce : {{$annonce->id}}</h2>

                <p>Titre : {{$annonce->title}}</p>
                <p>Description : {{$annonce->description}}</p>
                <p>Vos images : {{$annonce->image}}</p>
                <p>Prix : {{$annonce->price}}€</p>
            </div>


            <!-- Voir tous les détails -->
            <div>
                <a href="{{ route('Annonce.show', [$annonce->id]) }}">Voir tous les détails de mes annonces</a>
            </div>

            <!-- Modifier -->
            <div>
                <a href="{{ route('Annonce.edit', [$annonce->id]) }}">Modifier mon annonce</a>
            </div>



            <!-- Supprimer -->
            <form action="{{ route('Annonce.destroy', [$annonce->id]) }}" method="post">

                @method('DELETE')
                <div>
                    <input type="submit" value="Supprimer" class="button-delete">
                </div>
            </form>

        </div>
    </div>

    @endforeach
</div>

<div class="container-home">
    <a href="{{ url('http://127.0.0.1:8001/') }}" class="links-store">Retour à la page d'accueil ↲</a>
</div>

@endsection