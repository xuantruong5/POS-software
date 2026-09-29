<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            // =====================================================
            // 1. BÁNH, KẸO, SNACK
            // =====================================================
            [
                'id_category' => 1,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Hộp bánh quy tổng hợp',
                'ma_san_pham' => 'SP001',
                'ma_vach' => '893000000001',
                'hinh_anh' => null,            
                'trong_luong' => 300,
                'gia_nhap_cuoi' => 32000,
                'gia_von' => 30000,
                'gia_ban' => 45000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 2. CHĂM SÓC CÁ NHÂN
            // =====================================================

            [
                'id_category' => 2,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Dầu gội Clear',
                'ma_san_pham' => 'SP002',
                'ma_vach' => '893000000002',
                'hinh_anh' => null,
                'trong_luong' => 650,
                'gia_nhap_cuoi' => 90000,
                'gia_von' => 85000,
                'gia_ban' => 105000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 3. CHĂM SÓC NHÀ CỬA
            // =====================================================

            [
                'id_category' => 3,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Nước rửa chén Sunlight',
                'ma_san_pham' => 'SP003',
                'ma_vach' => '893000000003',
                'hinh_anh' => null,
                'trong_luong' => 750,
                'gia_nhap_cuoi' => 19000,
                'gia_von' => 18000,
                'gia_ban' => 25000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 4. CHĂM SÓC THÚ CƯNG
            // =====================================================

            [
                'id_category' => 4,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Thức ăn cho chó Pedigree',
                'ma_san_pham' => 'SP004',
                'ma_vach' => '893000000004',
                'hinh_anh' => null,
               
                'trong_luong' => 400,
                'gia_nhap_cuoi' => 27000,
                'gia_von' => 25000,
                'gia_ban' => 35000,
                'ban_chay' => false,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 5. DẦU ĂN, NƯỚC CHẤM, GIA VỊ
            // =====================================================

            [
                'id_category' => 5,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Nước mắm Nam Ngư',
                'ma_san_pham' => 'SP005',
                'ma_vach' => '893000000005',
                'hinh_anh' => null,
                
                'trong_luong' => 750,
                'gia_nhap_cuoi' => 32000,
                'gia_von' => 30000,
                'gia_ban' => 40000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 6. ĐỒ UỐNG
            // =====================================================

            [
                'id_category' => 6,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Coca Cola lon',
                'ma_san_pham' => 'SP006',
                'ma_vach' => '893000000006',
                'hinh_anh' => null,
                
                'trong_luong' => 330,
                'gia_nhap_cuoi' => 7500,
                'gia_von' => 7000,
                'gia_ban' => 10000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 7. BÁNH
            // =====================================================

            [
                'id_category' => 7,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Bánh quy bơ',
                'ma_san_pham' => 'SP007',
                'ma_vach' => '893000000007',
                'hinh_anh' => null,
                
                'trong_luong' => 454,
                'gia_nhap_cuoi' => 85000,
                'gia_von' => 80000,
                'gia_ban' => 110000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 8. KẸO
            // =====================================================

            [
                'id_category' => 8,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Kẹo bạc hà',
                'ma_san_pham' => 'SP008',
                'ma_vach' => '893000000008',
                'hinh_anh' => null,
                
                'trong_luong' => 100,
                'gia_nhap_cuoi' => 11000,
                'gia_von' => 10000,
                'gia_ban' => 15000,
                'ban_chay' => false,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 9. SNACK
            // =====================================================

            [
                'id_category' => 9,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Snack khoai tây vị BBQ',
                'ma_san_pham' => 'SP009',
                'ma_vach' => '893000000009',
                'hinh_anh' => null,
                
                'trong_luong' => 52,
                'gia_nhap_cuoi' => 10000,
                'gia_von' => 9000,
                'gia_ban' => 15000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 10. BÁNH TƯƠI
            // =====================================================

            [
                'id_category' => 10,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Bánh ngọt tươi',
                'ma_san_pham' => 'SP010',
                'ma_vach' => '893000000010',
                'hinh_anh' => null,
                
                'trong_luong' => 100,
                'gia_nhap_cuoi' => 11000,
                'gia_von' => 10000,
                'gia_ban' => 15000,
                'ban_chay' => false,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 11. BÁNH KHÔ
            // =====================================================

            [
                'id_category' => 11,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Bánh quy socola',
                'ma_san_pham' => 'SP011',
                'ma_vach' => '893000000011',
                'hinh_anh' => null,
                
                'trong_luong' => 133,
                'gia_nhap_cuoi' => 13000,
                'gia_von' => 12000,
                'gia_ban' => 18000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 12. KẸO DẺO, KẸO MARSHMALLOW
            // =====================================================

            [
                'id_category' => 12,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Kẹo dẻo trái cây',
                'ma_san_pham' => 'SP012',
                'ma_vach' => '893000000012',
                'hinh_anh' => null,
                
                'trong_luong' => 100,
                'gia_nhap_cuoi' => 13000,
                'gia_von' => 12000,
                'gia_ban' => 18000,
                'ban_chay' => false,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 13. SOCOLA
            // =====================================================

            [
                'id_category' => 13,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Socola sữa',
                'ma_san_pham' => 'SP013',
                'ma_vach' => '893000000013',
                'hinh_anh' => null,
                
                'trong_luong' => 41,
                'gia_nhap_cuoi' => 11000,
                'gia_von' => 10000,
                'gia_ban' => 15000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 14. KẸO MÚT
            // =====================================================

            [
                'id_category' => 14,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Kẹo mút trái cây',
                'ma_san_pham' => 'SP014',
                'ma_vach' => '893000000014',
                'hinh_anh' => null,
                'trong_luong' => 12,
                'gia_nhap_cuoi' => 2200,
                'gia_von' => 2000,
                'gia_ban' => 3000,
                'ban_chay' => false,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 15. BÁNH MÌ
            // =====================================================

            [
                'id_category' => 15,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Bánh mì sandwich',
                'ma_san_pham' => 'SP015',
                'ma_vach' => '893000000015',
                'hinh_anh' => null,
                
                'trong_luong' => 300,
                'gia_nhap_cuoi' => 19000,
                'gia_von' => 18000,
                'gia_ban' => 25000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 16. BÁNH BAO
            // =====================================================

            [
                'id_category' => 16,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Bánh bao nhân thịt',
                'ma_san_pham' => 'SP016',
                'ma_vach' => '893000000016',
                'hinh_anh' => null,
                
                'trong_luong' => 100,
                'gia_nhap_cuoi' => 7500,
                'gia_von' => 7000,
                'gia_ban' => 10000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 17. BÁNH KEM
            // =====================================================

            [
                'id_category' => 17,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Bánh kem socola',
                'ma_san_pham' => 'SP017',
                'ma_vach' => '893000000017',
                'hinh_anh' => null,
                
                'trong_luong' => 500,
                'gia_nhap_cuoi' => 130000,
                'gia_von' => 120000,
                'gia_ban' => 180000,
                'ban_chay' => false,
                'khach_dat' => true,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 18. KẸO MÚT TRÁI CÂY
            // =====================================================

            [
                'id_category' => 18,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Kẹo mút vị dâu',
                'ma_san_pham' => 'SP018',
                'ma_vach' => '893000000018',
                'hinh_anh' => null,
               
                'trong_luong' => 12,
                'gia_nhap_cuoi' => 2200,
                'gia_von' => 2000,
                'gia_ban' => 3000,
                'ban_chay' => false,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 19. KẸO MÚT SOCOLA
            // =====================================================

            [
                'id_category' => 19,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Kẹo mút socola',
                'ma_san_pham' => 'SP019',
                'ma_vach' => '893000000019',
                'hinh_anh' => null,
                
                'trong_luong' => 15,
                'gia_nhap_cuoi' => 2800,
                'gia_von' => 2500,
                'gia_ban' => 4000,
                'ban_chay' => false,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 20. SNACK KHOAI TÂY
            // =====================================================

            [
                'id_category' => 20,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Snack khoai tây vị BBQ',
                'ma_san_pham' => 'SP020',
                'ma_vach' => '893000000020',
                'hinh_anh' => null,
               
                'trong_luong' => 52,
                'gia_nhap_cuoi' => 10000,
                'gia_von' => 9000,
                'gia_ban' => 15000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 21. SNACK BẮP
            // =====================================================

            [
                'id_category' => 21,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Snack bắp phô mai',
                'ma_san_pham' => 'SP021',
                'ma_vach' => '893000000021',
                'hinh_anh' => null,
                
                'trong_luong' => 45,
                'gia_nhap_cuoi' => 8000,
                'gia_von' => 7000,
                'gia_ban' => 12000,
                'ban_chay' => false,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // 22. SNACK RONG BIỂN
            // =====================================================

            [
                'id_category' => 22,
                'id_store' => 1,
                'loai_hang' => 'hang_hoa',
                'ten_san_pham' => 'Snack rong biển',
                'ma_san_pham' => 'SP022',
                'ma_vach' => '893000000022',
                'hinh_anh' => null,
                
                'trong_luong' => 32,
                'gia_nhap_cuoi' => 16000,
                'gia_von' => 15000,
                'gia_ban' => 22000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // COMBO 1
            // ==========================================

            [
                'id_category' => 1,
                'id_store' => 1,
                'loai_hang' => 'combo',
                'ten_san_pham' => 'Combo ăn sáng',
                'ma_san_pham' => 'SP023',
                'ma_vach' => null,
                'hinh_anh' => null,
               
                'trong_luong' => null,
                'gia_nhap_cuoi' => 0,
                'gia_von' => 0,
                'gia_ban' => 55000,
                'ban_chay' => true,
                'khach_dat' => false,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // COMBO 2
            // ==========================================

            [
                'id_category' => 1,
                'id_store' => 1,
                'loai_hang' => 'combo',
                'ten_san_pham' => 'Combo ăn vặt',
                'ma_san_pham' => 'SP024',
                'ma_vach' => null,
                'hinh_anh' => null,
                
                'trong_luong' => null,
                'gia_nhap_cuoi' => 0,
                'gia_von' => 0,
                'gia_ban' => 40000,
                'ban_chay' => false,
                'khach_dat' => true,
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
