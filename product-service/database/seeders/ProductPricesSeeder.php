<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('product_prices')->truncate();

        DB::table('product_prices')->insert([

            // ==========================================
            // BẢNG GIÁ BÁN LẺ - ID 1
            // ==========================================

            // Bánh mì sandwich - SP015
            [
                'id_price_list' => 1,
                'id_product' => 15,
                'don_gia' => 25000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Bánh bao nhân thịt - SP016
            [
                'id_price_list' => 1,
                'id_product' => 16,
                'don_gia' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Coca Cola - SP006
            [
                'id_price_list' => 1,
                'id_product' => 6,
                'don_gia' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Snack khoai tây - SP020
            [
                'id_price_list' => 1,
                'id_product' => 20,
                'don_gia' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // BẢNG GIÁ BÁN SỈ - ID 2
            // ==========================================

            // Bánh mì sandwich
            [
                'id_price_list' => 2,
                'id_product' => 15,
                'don_gia' => 22000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Bánh bao nhân thịt
            [
                'id_price_list' => 2,
                'id_product' => 16,
                'don_gia' => 8500,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Coca Cola
            [
                'id_price_list' => 2,
                'id_product' => 6,
                'don_gia' => 8500,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Snack khoai tây
            [
                'id_price_list' => 2,
                'id_product' => 20,
                'don_gia' => 12000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
