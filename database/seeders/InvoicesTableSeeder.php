<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoicesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('invoices')->insert([
            ['total' => '990', 'discount' => '50', 'vat' => '40', 'payable' => '980', 'user_id' => 1, 'customer_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['total' => '620', 'discount' => '20', 'vat' => '25', 'payable' => '625', 'user_id' => 1, 'customer_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['total' => '430', 'discount' => '0', 'vat' => '20', 'payable' => '450', 'user_id' => 2, 'customer_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}


