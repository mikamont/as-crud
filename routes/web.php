<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtworkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('artist', [ArtistController::class, 'index']);
Route::get('artist/create', [ArtistController::class, 'create']);
Route::post('artist', [ArtistController::class, 'store']);
Route::get('artist/{id}/edit', [ArtistController::class, 'edit']);
Route::put('artist/{id}', [ArtistController::class, 'update']);
Route::delete('artist/{id}', [ArtistController::class, 'destroy']);

Route::get('artwork', [ArtworkController::class, 'index']);
Route::get('artwork/create', [ArtworkController::class, 'create']);
Route::post('artwork', [ArtworkController::class, 'store']);
Route::get('artwork/{id}/edit', [ArtworkController::class, 'edit']);
Route::put('artwork/{id}', [ArtworkController::class, 'update']);
Route::delete('artwork/{id}', [ArtworkController::class, 'destroy']);
