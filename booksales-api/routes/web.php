<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk genre
Route::get('/genres', [GenreController::class, 'index']);

// Route untuk author
Route::get('/authors', [AuthorController::class, 'index']);

