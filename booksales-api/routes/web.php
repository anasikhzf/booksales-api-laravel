<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);

