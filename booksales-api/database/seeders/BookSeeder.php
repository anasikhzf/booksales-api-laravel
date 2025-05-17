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
        Book::insert([
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone', 
                'author_id' => 1, 
                'genre_id' => 14, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'title' => 'A Game of Thrones', 
                'author_id' => 2, 
                'genre_id' => 14, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'title' => 'The Lord of the Rings', 
                'author_id' => 3, 
                'genre_id' => 14, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'title' => 'Murder on the Orient Express', 
                'author_id' => 4, 
                'genre_id' => 11, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'title' => 'The Shining', 
                'author_id' => 5, 
                'genre_id' => 11, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);
    }
}
