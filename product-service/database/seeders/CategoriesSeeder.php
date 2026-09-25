<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // =========================
        // CẤP 1
        // =========================

        $banhKeoSnack = DB::table('categories')->insertGetId([
            'id_parent' => null,
            'ten_danh_muc' => 'Bánh, kẹo, snack',
            'mo_ta' => 'Các sản phẩm bánh, kẹo và snack',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $chamSocCaNhan = DB::table('categories')->insertGetId([
            'id_parent' => null,
            'ten_danh_muc' => 'Chăm sóc cá nhân',
            'mo_ta' => 'Các sản phẩm chăm sóc cá nhân',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $chamSocNhaCua = DB::table('categories')->insertGetId([
            'id_parent' => null,
            'ten_danh_muc' => 'Chăm sóc nhà cửa',
            'mo_ta' => 'Các sản phẩm vệ sinh và chăm sóc nhà cửa',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $chamSocThuCung = DB::table('categories')->insertGetId([
            'id_parent' => null,
            'ten_danh_muc' => 'Chăm sóc thú cưng',
            'mo_ta' => 'Các sản phẩm dành cho thú cưng',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $dauAnNuocChamGiaVi = DB::table('categories')->insertGetId([
            'id_parent' => null,
            'ten_danh_muc' => 'Dầu ăn, nước chấm, gia vị',
            'mo_ta' => 'Các loại dầu ăn, nước chấm và gia vị',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $doUong = DB::table('categories')->insertGetId([
            'id_parent' => null,
            'ten_danh_muc' => 'Đồ uống',
            'mo_ta' => 'Các loại đồ uống',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // =========================
        // CẤP 2
        // BÁNH, KẸO, SNACK
        // =========================

        $banh = DB::table('categories')->insertGetId([
            'id_parent' => $banhKeoSnack,
            'ten_danh_muc' => 'Bánh',
            'mo_ta' => 'Các loại bánh',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $keo = DB::table('categories')->insertGetId([
            'id_parent' => $banhKeoSnack,
            'ten_danh_muc' => 'Kẹo',
            'mo_ta' => 'Các loại kẹo',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $snack = DB::table('categories')->insertGetId([
            'id_parent' => $banhKeoSnack,
            'ten_danh_muc' => 'Snack',
            'mo_ta' => 'Các loại snack',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // =========================
        // CẤP 3
        // BÁNH
        // =========================

        $banhTuoi = DB::table('categories')->insertGetId([
            'id_parent' => $banh,
            'ten_danh_muc' => 'Bánh tươi',
            'mo_ta' => 'Các loại bánh tươi',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $banhKho = DB::table('categories')->insertGetId([
            'id_parent' => $banh,
            'ten_danh_muc' => 'Bánh khô',
            'mo_ta' => 'Các loại bánh khô',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // =========================
        // CẤP 3
        // KẸO
        // =========================

        $keoDeo = DB::table('categories')->insertGetId([
            'id_parent' => $keo,
            'ten_danh_muc' => 'Kẹo dẻo, kẹo marshmallow',
            'mo_ta' => 'Các loại kẹo dẻo và marshmallow',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $socola = DB::table('categories')->insertGetId([
            'id_parent' => $keo,
            'ten_danh_muc' => 'Socola',
            'mo_ta' => 'Các loại socola',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $keoMut = DB::table('categories')->insertGetId([
            'id_parent' => $keo,
            'ten_danh_muc' => 'Kẹo mút',
            'mo_ta' => 'Các loại kẹo mút',
            'trang_thai' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // =========================
        // CẤP 4
        // BÊN TRONG BÁNH TƯƠI
        // =========================

        DB::table('categories')->insert([
            [
                'id_parent' => $banhTuoi,
                'ten_danh_muc' => 'Bánh mì',
                'mo_ta' => 'Các loại bánh mì',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_parent' => $banhTuoi,
                'ten_danh_muc' => 'Bánh bao',
                'mo_ta' => 'Các loại bánh bao',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_parent' => $banhTuoi,
                'ten_danh_muc' => 'Bánh kem',
                'mo_ta' => 'Các loại bánh kem',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        // =========================
        // CẤP 4
        // BÊN TRONG KẸO MÚT
        // =========================

        DB::table('categories')->insert([
            [
                'id_parent' => $keoMut,
                'ten_danh_muc' => 'Kẹo mút trái cây',
                'mo_ta' => 'Kẹo mút vị trái cây',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_parent' => $keoMut,
                'ten_danh_muc' => 'Kẹo mút socola',
                'mo_ta' => 'Kẹo mút vị socola',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        // =========================
        // CẤP 3
        // SNACK
        // =========================

        DB::table('categories')->insert([
            [
                'id_parent' => $snack,
                'ten_danh_muc' => 'Snack khoai tây',
                'mo_ta' => 'Các loại snack khoai tây',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_parent' => $snack,
                'ten_danh_muc' => 'Snack bắp',
                'mo_ta' => 'Các loại snack bắp',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_parent' => $snack,
                'ten_danh_muc' => 'Snack rong biển',
                'mo_ta' => 'Các loại snack rong biển',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
