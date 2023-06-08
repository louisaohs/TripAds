<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// jour 1 - route pour l'index (SHOWINDEX) :
Route::get('/show-index', [IndexController::class, 'showIndex'])->name('show.index');

// étape 1 - créer une ressource pour l'Utilisateur : 
Route::resource('Utilisateur', UtilisateurController::class);

// étape 2 - Créer une vérification de mail pour l'Utilisateur : 
Auth::routes([
    'verify' => true
]);

// jour 3 - développer le CRUD.
// - déjà effectuer via la commande breeze.
Route::resource('/Annonce', AnnonceController::class);

// jour 4 - la bar de recherche avec le flitrage :
Route::get('/search', [AnnonceController::class, 'search']);

// jour 5 - créer la ressource message.
Route::resource('/Message', MessageController::class);

// par défaut de laravel pour le login/register :
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
