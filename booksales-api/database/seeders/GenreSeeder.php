<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $now = now();

        $genres = [
            [
                'name' => 'Fiction',
                'descriptions' =>
                    'Fiction refers to stories that are created from the imagination. ' .
                    'It can be based on real events but is often exaggerated or altered. ' .
                    'Genres include mystery, thriller, historical fiction, and more.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Non-fiction',
                'descriptions' =>
                    'Non-fiction refers to factual stories or accounts of real events. ' .
                    'It includes biographies, documentaries, and self-help books. ' .
                    'It aims to inform or educate the reader about real-world topics.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Sci-Fi',
                'descriptions' =>
                    'Science fiction explores futuristic concepts and technologies. ' .
                    'It often involves space travel, time travel, and advanced technology. ' .
                    'Popular themes include artificial intelligence, aliens, and dystopian societies.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Fantasy',
                'descriptions' =>
                    'Fantasy involves magical elements that are not grounded in the real world. ' .
                    'It often features mythical creatures, wizards, and magical powers. ' .
                    'Examples include the works of J.R.R. Tolkien and C.S. Lewis.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Romance',
                'descriptions' =>
                    'Romance focuses on relationships and romantic love between characters. ' .
                    'It often includes conflicts that are overcome through love. ' .
                    'Genres may include historical romance, contemporary romance, and paranormal romance.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('genres')->insert($genres);
    }
}
