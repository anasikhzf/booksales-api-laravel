<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'message' => 'Data author berhasil diambil',
            'data' => $authors
        ], 200);
    }
}
