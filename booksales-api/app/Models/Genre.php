<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // Menyimpan data genre dengan banyak poin deskripsi
    private static $genres = [
        [
            'id' => 1,
            'name' => 'Fiction',
            'descriptions' => [
                'Fiction refers to stories that are created from the imagination.',
                'It can be based on real events but is often exaggerated or altered.',
                'Genres include mystery, thriller, historical fiction, and more.'
            ]
        ],
        [
            'id' => 2,
            'name' => 'Non-fiction',
            'descriptions' => [
                'Non-fiction refers to factual stories or accounts of real events.',
                'It includes biographies, documentaries, and self-help books.',
                'It aims to inform or educate the reader about real-world topics.'
            ]
        ],
        [
            'id' => 3,
            'name' => 'Sci-Fi',
            'descriptions' => [
                'Science fiction explores futuristic concepts and technologies.',
                'It often involves space travel, time travel, and advanced technology.',
                'Popular themes include artificial intelligence, aliens, and dystopian societies.'
            ]
        ],
        [
            'id' => 4,
            'name' => 'Fantasy',
            'descriptions' => [
                'Fantasy involves magical elements that are not grounded in the real world.',
                'It often features mythical creatures, wizards, and magical powers.',
                'Examples include the works of J.R.R. Tolkien and C.S. Lewis.'
            ]
        ],
        [
            'id' => 5,
            'name' => 'Romance',
            'descriptions' => [
                'Romance focuses on relationships and romantic love between characters.',
                'It often includes conflicts that are overcome through love.',
                'Genres may include historical romance, contemporary romance, and paranormal romance.'
            ]
        ],
    ];

    // Mengambil data genre
    public static function allGenres()
    {
        return self::$genres;
    }
}
