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

                // Thời gian hiệu lực
                'tu_ngay' => now(),
                'den_ngay' => null,

                // Trạng thái
                'trang_thai' => 1,

                // Cho phép bán hàng ngoài bảng giá
                'cho_ban_ngoai_bang_gia' => 1,

                // Không cảnh báo
                'canh_bao_ngoai_bang_gia' => 0,

                // Công thức: Giá vốn + 20%
                'loai_cong_thuc' => 'gia_von',
                'id_bang_gia_goc' => null,
                'phep_tinh' => 'cong',
                'gia_tri_cong_thuc' => 20,
                'don_vi_cong_thuc' => 'percent',

                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'ten_bang_gia' => 'Bảng giá bán sỉ',
                'loai_bang_gia' => 'ban_si',
                'mo_ta' => 'Bảng giá áp dụng cho khách hàng mua số lượng lớn',

                // Thời gian hiệu lực
                'tu_ngay' => now(),
                'den_ngay' => null,

                // Trạng thái
                'trang_thai' => 1,

                // Cho phép bán hàng ngoài bảng giá
                'cho_ban_ngoai_bang_gia' => 1,

                // Không cảnh báo
                'canh_bao_ngoai_bang_gia' => 0,

                // Công thức: Giá vốn + 10%
                'loai_cong_thuc' => 'gia_von',
                'id_bang_gia_goc' => null,
                'phep_tinh' => 'cong',
                'gia_tri_cong_thuc' => 10,
                'don_vi_cong_thuc' => 'percent',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
