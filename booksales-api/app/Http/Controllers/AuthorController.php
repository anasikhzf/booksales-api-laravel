<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        // Mengambil data author dari model
        $authors = Author::allAuthors();
        
        // Mengirim data author ke view author.index
        return view('author', compact('authors'));
    }
}
