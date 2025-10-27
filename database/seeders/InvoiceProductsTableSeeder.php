<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('invoice_products')->insert([
            // Invoice 1
            ['invoice_id' => 1, 'product_id' => 1, 'user_id' => 1, 'qty' => '1', 'sale_price' => '550', 'created_at' => now(), 'updated_at' => now()],
            ['invoice_id' => 1, 'product_id' => 5, 'user_id' => 1, 'qty' => '1', 'sale_price' => '90', 'created_at' => now(), 'updated_at' => now()],
            ['invoice_id' => 1, 'product_id' => 7, 'user_id' => 1, 'qty' => '1', 'sale_price' => '220', 'created_at' => now(), 'updated_at' => now()],

            // Invoice 2
            ['invoice_id' => 2, 'product_id' => 3, 'user_id' => 1, 'qty' => '2', 'sale_price' => '40', 'created_at' => now(), 'updated_at' => now()],
            ['invoice_id' => 2, 'product_id' => 4, 'user_id' => 1, 'qty' => '1', 'sale_price' => '70', 'created_at' => now(), 'updated_at' => now()],
            ['invoice_id' => 2, 'product_id' => 6, 'user_id' => 1, 'qty' => '1', 'sale_price' => '150', 'created_at' => now(), 'updated_at' => now()],

            // Invoice 3
            ['invoice_id' => 3, 'product_id' => 10, 'user_id' => 2, 'qty' => '2', 'sale_price' => '85', 'created_at' => now(), 'updated_at' => now()],
            ['invoice_id' => 3, 'product_id' => 12, 'user_id' => 2, 'qty' => '1', 'sale_price' => '60', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}


