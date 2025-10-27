<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Groceries', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fresh Produce', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dairy & Eggs', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Meat & Fish', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Beverages', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Snacks', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Household', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}


