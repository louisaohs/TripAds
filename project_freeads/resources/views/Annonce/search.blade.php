@extends('layouts.main')

@section('title', 'Flitrer votre annonce est notre priorité')

@section('content')


<div class="container-store">
    <div class="sub-store">
        <h2>Flitrer la recherche que vous voulez :</h2>
        <br />
        <form action="" method="GET" role="search">

            <!-- bar de recherche : -->
            <label for="search">Rechercher :</label>
            <input type="text" name="search" placeholder="Rechercher votre annonce..." class="input-search" required />

            <div>
                <input type="checkbox" name="categories" id="" value="title">
                <label for="title">Titre</label>

                <input type="checkbox" name="categories" id="" value="description">
                <label for="description">Description</label>

                <input type="checkbox" name="categories" id="" value="image">
                <label for="image">Image</label>

                <input type="checkbox" name="categories" id="" value="prix">
                <label for="price">Prix</label>

                <input type="checkbox" name="categories" id="" value="id">
                <label for="id">Annnonce publiée</label>

                <input type="checkbox" name="categories" id="" value="created_at">
                <label for="created_at">Annnonce la plus récente</label>

                <input type="submit" value="Rechercher" class="button-design">
            </div>
            <!-- les résultats : -->
            <div class="result">

                @if ($annonces !== [])

                <h1 class="result-bar">
                    Résultat de recherche pour :
                    <small>{{$search}}</small>
                </h1>

                @else

                <h2 class="result-bar">
                    <p>Nous sommes désolés, nous n'avons pas trouvé votre recherche...
                    <p>
                </h2>

                @endif

            </div>
        </form>

        <div class="">
            <a href="{{ route('Annonce.index') }}" class="links-store">Retour à ma liste d'annonces ↲</a>
        </div>
    </div>
</div>

@endsection