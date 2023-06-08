@extends('layouts.main')

@section('content')

<div class="container-message">
    <div class="container">

        <form method="POST" action="{{ route('Message.store') }}" class="form-create">

            <h3 class="title-message">Créer un nouveau message :</h3>
            <br />

            @csrf

            <div class="form-group">
                <label for="sender">De :</label>
                <input type="text" class="form-control" id="sender" name="sender" placeholder="Vous" value="{{ Auth::user()->name }}" readonly>
            </div>

            <div class="form-group">
                <label for="destinataire">À :</label>
                <input type="text" class="form-control" id="destinataire" name="destinataire" placeholder="Nom du destinataire..." required>
            </div>

            <div class="form-group">
                <label for="subject">Sujet :</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet de votre message..." required>
            </div>

            <div class="form-group">
                <label for="message">Votre message :</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Ceci est un exemple de message..." required></textarea>
            </div>

            <button type="submit" class="button-design">Envoyer</button>
        </form>

        <br />

        <!-- index -->
        <div class="">
            <a href="{{ route('Annonce.index') }}" class="links-store">Retour à ma liste d'annonces ↲</a>
        </div>
        
    </div>
</div>

@endsection