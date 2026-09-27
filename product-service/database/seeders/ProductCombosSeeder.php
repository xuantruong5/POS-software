<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCombosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_combos')->truncate();
        DB::table('product_combos')->insert([
            // ==========================================
            // COMBO 1
            // Bánh mì sandwich x2
            // Coca Cola x1
            // ==========================================
            [
                'id_combo_product' => 23,
                'id_product' => 15,
                'so_luong' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_combo_product' => 23,
                'id_product' => 6,
                'so_luong' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // ==========================================
            // COMBO 2
            // Snack khoai tây x1
            // Kẹo dẻo x1
            // Coca Cola x1
            // ==========================================
            [
                'id_combo_product' => 24,
                'id_product' => 20,
                'so_luong' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_combo_product' => 24,
                'id_product' => 12,
                'so_luong' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_combo_product' => 24,
                'id_product' => 6,
                'so_luong' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
