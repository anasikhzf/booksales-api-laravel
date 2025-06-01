<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::insert([
            ['order_number' => 'ORD001', 'customer_id' => 1, 'book_id' => 1, 'total_amount' => 100000, 'created_at' => now(), 'updated_at' => now()],
            ['order_number' => 'ORD002', 'customer_id' => 2, 'book_id' => 3, 'total_amount' => 90000, 'created_at' => now(), 'updated_at' => now()],
            ['order_number' => 'ORD003', 'customer_id' => 1, 'book_id' => 2, 'total_amount' => 120000, 'created_at' => now(), 'updated_at' => now()],
            ['order_number' => 'ORD004', 'customer_id' => 3, 'book_id' => 5, 'total_amount' => 95000, 'created_at' => now(), 'updated_at' => now()],
            ['order_number' => 'ORD005', 'customer_id' => 2, 'book_id' => 4, 'total_amount' => 110000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
