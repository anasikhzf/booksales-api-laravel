<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        // Mengambil data genre dari model
        $genres = Genre::allGenres();
        
        // Mengirim data genre ke view genre.index
        return view('genre', compact('genres'));
    }
}
