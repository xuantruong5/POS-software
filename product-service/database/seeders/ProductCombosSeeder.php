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
            // ==========================================
            [
                'id_product' => 23,
                'mo_ta' => 'Bánh mì sandwich x2 + Coca Cola x1',
                'ghi_chu' => 'Combo Bánh mì + Coca Cola',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // COMBO 2
            // ==========================================
            [
                'id_product' => 24,
                'mo_ta' => 'Snack khoai tây x1 + Kẹo dẻo x1 + Coca Cola x1',
                'ghi_chu' => 'Combo Snack + Kẹo + Coca Cola',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
