@extends('layouts.main')

@section('title', 'Créer mon annonce de voyage')

@section('content')

<div class="wrapper">
    <div class="container">
        <form action="{{ route('Annonce.store') }}" method="POST" class="form-create">
            <h3 class="title-annonce">Créer une annonce de voyage</h3>
            <br />

            <!-- pour protéger les injections : -->
            @csrf

            <!-- ma méthode : -->
            @method('POST')

            <div class="line-create">
                <!-- titre : -->
                <label for="title">Title :</label>
                <input type="text" name="title" value="{{old('title')}}" placeholder="Titre..." required />
            </div>
            <div class="line-create">
                <!-- description : -->
                <label for="description">Description :</label>
                <input type="text" name="description" value="{{old('description')}}" placeholder="Description de votre annonce..." required />
            </div>
            <div class="line-create">
                <!-- image : -->
                <label for="image">Image :</label>
                <input type="file" name="image" value="{{old('image')}}" placeholder="Image de votre voyage..." required />
            </div>
            <div class="line-create">
                <!-- prix : -->
                <label for="price">Prix :</label>
                <input type="text" name="price" value="{{old('price')}}" placeholder="Prix de votre voyage..." required />
            </div>
            <div class="container-button">
                <!-- action submit -->
                <input type="submit" value="Ajouter" class="button-design">
            </div>
        </form>

        <div>
            <br />
            <a href="{{ route('Annonce.index') }}" class="links-store">Retour à ma liste d'annonces ↲</a>
        </div>

        <!-- gestion des erreurs : -->
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
</div>


@endsection