<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Menyimpan data author sebagai private
    private static $authors = [
        ['id' => 1, 'name' => 'J.K. Rowling'],
        ['id' => 2, 'name' => 'George Orwell'],
        ['id' => 3, 'name' => 'Isaac Asimov'],
        ['id' => 4, 'name' => 'J.R.R. Tolkien'],
        ['id' => 5, 'name' => 'Jane Austen'],
    ];

    // Mengambil data author
    public static function allAuthors()
    {
        return self::$authors;
    }
}