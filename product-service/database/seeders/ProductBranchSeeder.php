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
            // CHI NHÁNH 1 - 20 SẢN PHẨM
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
                'id_product' => 3,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 4,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 5,
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
                'id_product' => 7,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 8,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 9,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 10,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 11,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 12,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 13,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 14,
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
                'id_product' => 16,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 17,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 18,
                'id_branch' => 1,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 19,
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

            // ==========================================
            // CHI NHÁNH 2 - 4 SẢN PHẨM
            // ==========================================

            [
                'id_product' => 21,
                'id_branch' => 2,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_product' => 22,
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

            [
                'id_product' => 24,
                'id_branch' => 2,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}