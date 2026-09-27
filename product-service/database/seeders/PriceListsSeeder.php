<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('price_lists')->truncate();
        DB::table('price_lists')->insert([
            [
                'ten_bang_gia' => 'Bảng giá bán lẻ',
                'loai_bang_gia' => 'ban_le',
                'mo_ta' => 'Bảng giá áp dụng cho khách hàng mua lẻ',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_bang_gia' => 'Bảng giá bán sỉ',
                'loai_bang_gia' => 'ban_si',
                'mo_ta' => 'Bảng giá áp dụng cho khách hàng mua số lượng lớn',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
