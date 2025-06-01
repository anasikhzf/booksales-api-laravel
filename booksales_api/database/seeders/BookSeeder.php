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
            ['title' => 'Book One', 'description' => 'Description Book One', 'price' => 100000, 'stok' => 10, 'cover_image_name' => 'cover1.jpg', 'genre_id' => 1, 'author_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Book Two', 'description' => 'Description Book Two', 'price' => 120000, 'stok' => 8, 'cover_image_name' => 'cover2.jpg', 'genre_id' => 2, 'author_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Book Three', 'description' => 'Description Book Three', 'price' => 90000, 'stok' => 15, 'cover_image_name' => 'cover3.jpg', 'genre_id' => 3, 'author_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Book Four', 'description' => 'Description Book Four', 'price' => 110000, 'stok' => 7, 'cover_image_name' => 'cover4.jpg', 'genre_id' => 4, 'author_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Book Five', 'description' => 'Description Book Five', 'price' => 95000, 'stok' => 20, 'cover_image_name' => 'cover5.jpg', 'genre_id' => 5, 'author_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
