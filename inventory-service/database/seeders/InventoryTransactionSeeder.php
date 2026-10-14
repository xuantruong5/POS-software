<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoryTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inventory_transactions')->truncate();
        DB::table('inventory_transactions')->insert([
         // ==========================================
            // NHẬP HÀNG
            // Inventory ID 1
            // ==========================================

            [
                'id_inventory' => 1,
                'loai_giao_dich' => 'nhap',
                'so_luong' => 50,
                'so_luong_truoc' => 0,
                'so_luong_sau' => 50,
                'reference_type' => 'purchase',
                'id_reference' => 1,
                'ghi_chu' => 'Nhập hàng lần đầu',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],

            // ==========================================
            // NHẬP THÊM
            // Inventory ID 1
            // ==========================================

            [
                'id_inventory' => 1,
                'loai_giao_dich' => 'nhap',
                'so_luong' => 20,
                'so_luong_truoc' => 50,
                'so_luong_sau' => 70,
                'reference_type' => 'purchase',
                'id_reference' => 2,
                'ghi_chu' => 'Nhập thêm hàng',
                'created_at' => now()->subDays(3),
                'updated_at' => now()->subDays(3),
            ],

            // ==========================================
            // BÁN HÀNG
            // Inventory ID 1
            // ==========================================

            [
                'id_inventory' => 1,
                'loai_giao_dich' => 'ban_hang',
                'so_luong' => -20,
                'so_luong_truoc' => 70,
                'so_luong_sau' => 50,
                'reference_type' => 'sale',
                'id_reference' => 1,
                'ghi_chu' => 'Xuất kho do bán hàng',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],

            // ==========================================
            // ĐIỀU CHỈNH
            // Inventory ID 2
            // ==========================================

            [
                'id_inventory' => 2,
                'loai_giao_dich' => 'dieu_chinh',
                'so_luong' => 5,
                'so_luong_truoc' => 25,
                'so_luong_sau' => 30,
                'reference_type' => 'inventory_adjustment',
                'id_reference' => 1,
                'ghi_chu' => 'Điều chỉnh sau khi kiểm kê',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],

            // ==========================================
            // TRẢ HÀNG
            // Inventory ID 6
            // ==========================================

            [
                'id_inventory' => 6,
                'loai_giao_dich' => 'tra_hang',
                'so_luong' => 3,
                'so_luong_truoc' => 32,
                'so_luong_sau' => 35,
                'reference_type' => 'sale_return',
                'id_reference' => 1,
                'ghi_chu' => 'Khách trả lại hàng',
                'created_at' => now()->subDay(),
                'updated_at' => now()->subDay(),
            ],

            // ==========================================
            // CHUYỂN KHO
            // Inventory ID 7
            // ==========================================

            [
                'id_inventory' => 7,
                'loai_giao_dich' => 'chuyen_kho',
                'so_luong' => 10,
                'so_luong_truoc' => 15,
                'so_luong_sau' => 25,
                'reference_type' => 'stock_transfer',
                'id_reference' => 1,
                'ghi_chu' => 'Nhận hàng chuyển từ chi nhánh khác',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
