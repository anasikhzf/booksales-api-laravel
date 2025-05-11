<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // Menyimpan data genre sebagai private
    private static $genres = [
        ['id' => 1, 'name' => 'Fiction'],
        ['id' => 2, 'name' => 'Non-fiction'],
        ['id' => 3, 'name' => 'Sci-Fi'],
        ['id' => 4, 'name' => 'Fantasy'],
        ['id' => 5, 'name' => 'Romance'],
    ];

    // Mengambil data genre
    public static function allGenres()
    {
        return self::$genres;
    }
}