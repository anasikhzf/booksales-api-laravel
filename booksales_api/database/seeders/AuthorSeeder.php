<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        Author::insert([
            ['name' => 'Author One', 'name_image' => 'author1.jpg', 'bio' => 'Bio Author One', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Author Two', 'name_image' => 'author2.jpg', 'bio' => 'Bio Author Two', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Author Three', 'name_image' => 'author3.jpg', 'bio' => 'Bio Author Three', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Author Four', 'name_image' => 'author4.jpg', 'bio' => 'Bio Author Four', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Author Five', 'name_image' => 'author5.jpg', 'bio' => 'Bio Author Five', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
