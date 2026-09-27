<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inventories')->truncate();
        DB::table('inventories')->insert([

            // ==========================================
            // CHI NHÁNH 1
            // ==========================================

            [
                'id_branch' => 1,
                'id_product' => 1,
                'so_luong_ton' => 50,
                'ton_kho_toi_thieu' => 10,
                'ton_kho_toi_da' => 100,
                'vi_tri_de_hang' => 'Kệ A01',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_branch' => 1,
                'id_product' => 2,
                'so_luong_ton' => 30,
                'ton_kho_toi_thieu' => 5,
                'ton_kho_toi_da' => 50,
                'vi_tri_de_hang' => 'Kệ A02',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_branch' => 1,
                'id_product' => 6,
                'so_luong_ton' => 100,
                'ton_kho_toi_thieu' => 20,
                'ton_kho_toi_da' => 200,
                'vi_tri_de_hang' => 'Kệ B01',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_branch' => 1,
                'id_product' => 15,
                'so_luong_ton' => 40,
                'ton_kho_toi_thieu' => 10,
                'ton_kho_toi_da' => 80,
                'vi_tri_de_hang' => 'Kệ C01',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_branch' => 1,
                'id_product' => 20,
                'so_luong_ton' => 60,
                'ton_kho_toi_thieu' => 10,
                'ton_kho_toi_da' => 100,
                'vi_tri_de_hang' => 'Kệ C02',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // CHI NHÁNH 2
            // ==========================================

            [
                'id_branch' => 1,
                'id_product' => 3,
                'so_luong_ton' => 35,
                'ton_kho_toi_thieu' => 10,
                'ton_kho_toi_da' => 80,
                'vi_tri_de_hang' => 'Kệ A01',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_branch' => 1,
                'id_product' => 22,
                'so_luong_ton' => 70,
                'ton_kho_toi_thieu' => 15,
                'ton_kho_toi_da' => 150,
                'vi_tri_de_hang' => 'Kệ B01',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_branch' => 1,
                'id_product' => 5,
                'so_luong_ton' => 25,
                'ton_kho_toi_thieu' => 5,
                'ton_kho_toi_da' => 60,
                'vi_tri_de_hang' => 'Kệ C01',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_branch' => 1,
                'id_product' => 19,
                'so_luong_ton' => 45,
                'ton_kho_toi_thieu' => 10,
                'ton_kho_toi_da' => 80,
                'vi_tri_de_hang' => 'Kệ C02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
