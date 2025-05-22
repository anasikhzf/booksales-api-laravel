<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        Genre::create([
            'name' => 'Fiction',
            'descriptions' => 'Fictional books category',
        ]);

        Genre::create([
            'name' => 'Non-Fiction',
            'descriptions' => 'Based on real facts and information',
        ]);

        Genre::create([
            'name' => 'Science',
            'descriptions' => 'Books related to scientific topics',
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'descriptions' => 'Magical or supernatural themed books',
        ]);

        Genre::create([
            'name' => 'Biography',
            'descriptions' => 'Books about people’s lives',
        ]);
    }
}
