<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author; 

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::insert([
            ['name' => 'J.K. Rowling', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'George R.R. Martin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'J.R.R. Tolkien', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Agatha Christie', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stephen King', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
