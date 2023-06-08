@extends('layouts.main')

@section('content')

<div class="container-message-send">
    <h1 class="title-message">Mes messages :</h1>

    @if (count($messages) > 0)

    <table class="table">

        <thead>
            <tr>
                <th class="sub-title">Sujet</th>
                <th class="sub-title">Date d'envoi</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <!-- pour afficher plusieurs messages -->
            @foreach ($messages as $message)
            <tr>
                <td>{{ $message->subject }}</td>
                <td>{{ $message->created_at }}</td>
                <td><a href="{{ route('Message.show', $message->id) }}" class="links-store">Voir</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>

    {{ $messages->links() }}
    
    @else

    <p>Vous n'avez aucun message.</p>

    @endif

    <br />
    <!-- envoyer un message -->
    <div class="">
        <a href="{{ route('Message.create') }}" class="links-store">Envoyer un nouveau message</a>
    </div>
    <!-- index -->
    <div class="">
        <a href="{{ route('Annonce.index') }}" class="links-store">Retour à ma liste d'annonces ↲</a>
    </div>

</div>

@endsection