<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
            'product_name' => 'iPhone 15',
            'product_type' => 1,
            'price' => 59000,
            'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Samsung S30',
                'product_type' => 1,
                'price' => 40000,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'LG Smart TV',
                'product_type' => 2,
                'price' => 50900,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Apple TV',
                'product_type' => 2,
                'price' => 89000,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
