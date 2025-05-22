<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        Author::create([
            'name' => 'John Doe',
            'address' => '123 Street Name',
        ]);

        Author::create([
            'name' => 'Jane Smith',
            'address' => '456 Avenue Lane',
        ]);

        Author::create([
            'name' => 'Alice Johnson',
            'address' => '789 Main Road',
        ]);

        Author::create([
            'name' => 'Robert Brown',
            'address' => '101 Side Street',
        ]);
    }
}
