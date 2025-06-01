<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        Genre::insert([
            ['name' => 'Fiction', 'descriptions' => 'Fictional books', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Non-Fiction', 'descriptions' => 'Non-fictional books', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mystery', 'descriptions' => 'Mystery and thriller', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Romance', 'descriptions' => 'Romantic books', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Science', 'descriptions' => 'Science related books', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
