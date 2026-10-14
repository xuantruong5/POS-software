<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stores')->truncate();
        DB::table('stores')->insert([
            [
                'id_system' => 1,
                'ma_cua_hang' => 'BACHHOAXUANMAI',
                'ten_cua_hang' => 'Bách Hóa Xuân Mai',
                'so_dien_thoai' => '0973325931',
                'email' => 'phamsuu1973@gmail.com',
                'dia_chi' => 'Thôn 14 ',
                'khu_vuc' => 'Dak Lak',
                'phuong_xa' => 'Xã Eale ',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_system' => 2,
                'ma_cua_hang' => 'CH_NHAHANG_01',
                'ten_cua_hang' => 'Nhà Hàng Gạo',
                'so_dien_thoai' => '0905987654',
                'email' => 'nhahang@example.com',
                'dia_chi' => '456 Điện Biên Phủ',
                'khu_vuc' => 'Thanh Khê',
                'phuong_xa' => 'Chính Gián',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
