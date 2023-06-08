@extends('layouts.main')

@section('title', 'Modifier mon annonce')

@section('content')



<div class="wrapper">
    <div class="container">
        <form action="{{route('Annonce.update', [$annonce->id])}}" method="POST" class="form-create">
            <h3 class="title-annonce">Modifier mon annonce :</h3>
            <br />
            <!-- ma méthode : -->
            @csrf
            @method('PUT')

            <div class="line-create">
                <!-- titre : -->
                <label for="title">Title :</label>
                <input type="text" name="title" value="{{$annonce->title}}" placeholder="Modifier votre titre..." />
            </div>

            <div class="line-create">
                <!-- description : -->
                <label for="description">Description :</label>
                <input type="text" name="description" value="{{$annonce->description}}" placeholder="Modifier votre description..." />
            </div>

            <div class="line-create">
                <!-- image : -->
                <label for="image">Image :</label>
                <input type="text" name="image" value="{{$annonce->image}}" placeholder="Modifier votre image..." />
            </div>

            <div class="line-create">
                <!-- prix : -->
                <label for="price">Prix :</label>
                <input type="text" name="price" value="{{$annonce->price}}" placeholder="Modifier votre prix..." />
            </div>

            <div class="line-create">
                <!-- action submit -->
                <input type="submit" value="Modifier" class="button-delete">
            </div>
            <!-- index -->
            <div class="">
                <a href="{{ route('Annonce.index') }}" class="links-store">Retour à ma liste d'annonces ↲</a>
            </div>
        </form>
    </div>
</div>



@endsection