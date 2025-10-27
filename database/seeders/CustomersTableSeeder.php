<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['name' => 'Md. Azizul Haque', 'email' => 'azizul@example.com', 'mobile' => '01733334444', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sara Rahman', 'email' => 'sara@example.com', 'mobile' => '01855556666', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hasan Mahmud', 'email' => 'hasan@example.com', 'mobile' => '01977778888', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}


