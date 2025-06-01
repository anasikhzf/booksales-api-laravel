<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;

// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

// // Public routes
// Route::get('/books', [BookController::class, 'index']);

// // Authenticated user routes
// Route::middleware('auth:api')->group(function () {
//     Route::apiResource('authors', AuthorController::class)->only('index','show');
//     Route::apiResource('genres', GenreController::class)->only('index','show');
//     Route::apiResource('books', BookController::class)->only('show');
//     Route::apiResource('transactions', TransactionController::class)->only('index','store');
// });

// // Admin routes
// Route::middleware(['auth:api', 'checkRole:admin'])->group(function () {
//     Route::apiResource('authors', AuthorController::class)->except('index','show');
//     Route::apiResource('genres', GenreController::class)->except('index','show');
//     Route::apiResource('books', BookController::class)->except('index','show');
//     Route::apiResource('transactions', TransactionController::class)->except('index','store');
// });

Route::apiResource('authors', AuthorController::class);
Route::apiResource('genres', GenreController::class);
Route::apiResource('books', BookController::class);
Route::apiResource('transactions', TransactionController::class);