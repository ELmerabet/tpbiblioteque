<?php

use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::resource('livres', LivreController::class);
});
// Route::resource('livres', LivreController::class);!

// Route spécifique pour afficher la page de confirmation de suppression

Route::middleware(['auth'])->group(function(){
    Route::get('/livres/{livre}/confirm-delete', [LivreController::class, 'confirmDelete'])
    ->name('livres.confirmDelete');
Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
