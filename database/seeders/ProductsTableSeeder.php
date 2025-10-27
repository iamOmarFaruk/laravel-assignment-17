<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            // Groceries
            ['user_id' => 1, 'category_id' => 1, 'name' => 'Miniket Rice 5kg', 'price' => '550', 'unit' => 'bag', 'image' => 'rice-miniket-5kg.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'category_id' => 1, 'name' => 'Loose Sugar 1kg', 'price' => '120', 'unit' => 'kg', 'image' => 'sugar-1kg.jpg', 'created_at' => now(), 'updated_at' => now()],

            // Fresh Produce
            ['user_id' => 1, 'category_id' => 2, 'name' => 'Potato (Aloo) 1kg', 'price' => '40', 'unit' => 'kg', 'image' => 'potato-1kg.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'category_id' => 2, 'name' => 'Tomato 1kg', 'price' => '70', 'unit' => 'kg', 'image' => 'tomato-1kg.jpg', 'created_at' => now(), 'updated_at' => now()],

            // Dairy & Eggs
            ['user_id' => 1, 'category_id' => 3, 'name' => 'Milk (Fresh) 1L', 'price' => '90', 'unit' => 'liter', 'image' => 'milk-1l.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'category_id' => 3, 'name' => 'Farm Eggs (12 pcs)', 'price' => '150', 'unit' => 'dozen', 'image' => 'eggs-12.jpg', 'created_at' => now(), 'updated_at' => now()],

            // Meat & Fish
            ['user_id' => 1, 'category_id' => 4, 'name' => 'Broiler Chicken 1kg', 'price' => '220', 'unit' => 'kg', 'image' => 'broiler-1kg.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'category_id' => 4, 'name' => 'Rohu Fish (Rui) 1kg', 'price' => '350', 'unit' => 'kg', 'image' => 'rui-1kg.jpg', 'created_at' => now(), 'updated_at' => now()],

            // Beverages
            ['user_id' => 2, 'category_id' => 5, 'name' => 'Coca-Cola 1.25L', 'price' => '85', 'unit' => 'bottle', 'image' => 'coke-1_25l.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'category_id' => 5, 'name' => 'Ispahani Mirzapore Tea 200g', 'price' => '120', 'unit' => 'pack', 'image' => 'tea-ispahani-200g.jpg', 'created_at' => now(), 'updated_at' => now()],

            // Snacks
            ['user_id' => 2, 'category_id' => 6, 'name' => 'Biscuit (Nutty) 100g', 'price' => '20', 'unit' => 'pack', 'image' => 'biscuit-nutty-100g.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'category_id' => 6, 'name' => 'Chanachur (Bombay) 200g', 'price' => '60', 'unit' => 'pack', 'image' => 'chanachur-200g.jpg', 'created_at' => now(), 'updated_at' => now()],

            // Household
            ['user_id' => 2, 'category_id' => 7, 'name' => 'Dishwashing Liquid 500ml', 'price' => '110', 'unit' => 'bottle', 'image' => 'dishwash-500ml.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'category_id' => 7, 'name' => 'Laundry Detergent 1kg', 'price' => '180', 'unit' => 'pack', 'image' => 'detergent-1kg.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}


