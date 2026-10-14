<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('supplier_groups')->truncate();

        DB::table('supplier_groups')->insert([
            [
                'ten_nhom' => 'Nhà cung cấp thực phẩm',
                'mo_ta' => 'Các nhà cung cấp bánh, kẹo, đồ ăn, thực phẩm',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'ten_nhom' => 'Nhà cung cấp đồ uống',
                'mo_ta' => 'Các nhà cung cấp nước ngọt, nước suối và đồ uống',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'ten_nhom' => 'Nhà cung cấp gia dụng',
                'mo_ta' => 'Các nhà cung cấp sản phẩm gia dụng',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'ten_nhom' => 'Nhà cung cấp hóa mỹ phẩm',
                'mo_ta' => 'Các nhà cung cấp sản phẩm chăm sóc cá nhân và hóa mỹ phẩm',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'ten_nhom' => 'Nhà cung cấp văn phòng phẩm',
                'mo_ta' => 'Các nhà cung cấp văn phòng phẩm và đồ dùng học tập',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
