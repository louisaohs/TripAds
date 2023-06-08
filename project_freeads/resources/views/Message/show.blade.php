@extends('layouts.main')

@section('content')

<div class="container-message">

    <div class="container form-create scroll">

        <h1 class="title-message">Mon message :</h1>
            <br />
        <p><strong class="title">De :</strong> {{ $messages->sender }}</p>
            <br />
        <p><strong class="title">À :</strong> {{ $messages->destinataire }}</p>
            <br />
        <p><strong class="title">Sujet :</strong> {{ $messages->subject }}</p>
            <br />
        <p><strong class="title">Message :</strong></p>
            <br />
        <p>{{ $messages->message }}</p>

        <a href="{{ route('Message.index') }}" class="links-store">Retour à mes messages envoyés ↲</a>

    </div>
</div>

@endsection