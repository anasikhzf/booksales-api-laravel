<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [   'name' => 'User One', 
                'email' => 'user1@example.com', 
                'password' => Hash::make('password'), 
                'role' => 'user', 
                'created_at' => now(),
                'updated_at' => now()
            ],

            ['name' => 'User Two', 'email' => 'user2@example.com', 'password' => Hash::make('password'), 'role' => 'user', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Admin One', 'email' => 'admin1@example.com', 'password' => Hash::make('password'), 'role' => 'admin', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
