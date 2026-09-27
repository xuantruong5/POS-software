<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('product_branches')->truncate();

        DB::table('product_branches')->insert([

            // ==========================================
            // CHI NHÁNH 1
            // ==========================================

            [
                'id_product' => 1,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 2,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 6,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 15,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 20,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 23,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 24,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // CHI NHÁNH 2
            // ==========================================

            [
                'id_product' => 1,
                'id_branch' => 2,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 6,
                'id_branch' => 2,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 15,
                'id_branch' => 2,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 20,
                'id_branch' => 2,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 23,
                'id_branch' => 2,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
