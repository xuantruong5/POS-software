<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->truncate();
        DB::table('branches')->insert([
            // =========================
            // CHI NHÁNH TẠP HÓA
            // =========================
            [
                'id_store' => 1,
                'ma_chi_nhanh' => 'CN_TAPHOA_01',
                'ten_chi_nhanh' => 'Bách hóa Xuân Mai - Cơ sở 1',
                'so_dien_thoai' => '0973325931',
                'dia_chi' => 'thôn 14',
                'khu_vuc' => 'Dak Lak',
                'phuong_xa' => 'Eale',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_store' => 1,
                'ma_chi_nhanh' => 'CN_TAPHOA_02',
                'ten_chi_nhanh' => 'Tạp Hóa Xuân Trường - Cơ sở 2',
                'so_dien_thoai' => '0905222222',
                'dia_chi' => '456 Lê Duẩn',
                'khu_vuc' => 'Thanh Khê',
                'phuong_xa' => 'Tân Chính',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // CHI NHÁNH NHÀ HÀNG
            // =========================
            [
                'id_store' => 2,
                'ma_chi_nhanh' => 'CN_NHAHANG_01',
                'ten_chi_nhanh' => 'Nhà Hàng Xuân Trường - Cơ sở 1',
                'so_dien_thoai' => '0905333333',
                'dia_chi' => '789 Điện Biên Phủ',
                'khu_vuc' => 'Thanh Khê',
                'phuong_xa' => 'Chính Gián',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
