<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mon tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="title-site">TripAds,</h2>
                    Bonjour {{ Auth::user()->name }}, {{ __("vous êtes connecté(e) !") }}
                </div>

                <div class="container-dashboard">
                    <a href="{{ route('Message.index') }}">Mes messages envoyés</a>
                    <a href="{{ route('Annonce.index') }}">Mes annonces publiées</a>
                    <a href="{{ url('http://127.0.0.1:8001/') }}">Retour à la page d'accueil ↲</a>
                </div>
                <br />
            </div>
        </div>
    </div>
</x-app-layout>