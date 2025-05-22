<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book; 

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Example Book',
            'description' => 'Sample description.',
            'image_name' => 'example.jpg',
            'author_id' => 1,
            'genre_id' => 1,
        ]);

        Book::create([
            'title' => 'The Time Traveler',
            'description' => 'A journey through time and space.',
            'image_name' => 'time_traveler.jpg',
            'author_id' => 2,
            'genre_id' => 4,
        ]);

        Book::create([
            'title' => 'Life of a Genius',
            'description' => 'Biography of a legendary figure.',
            'image_name' => 'genius_life.jpg',
            'author_id' => 3,
            'genre_id' => 5,
        ]);

        Book::create([
            'title' => 'The Science of Everything',
            'description' => 'Explaining science in simple terms.',
            'image_name' => 'science_everything.jpg',
            'author_id' => 1,
            'genre_id' => 3,
        ]);

        Book::create([
            'title' => 'The Real World',
            'description' => 'A non-fiction look at society.',
            'image_name' => 'real_world.jpg',
            'author_id' => 4,
            'genre_id' => 2,
        ]);
    }
}
