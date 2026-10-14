<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('suppliers')->truncate();

        DB::table('suppliers')->insert([

            // ==========================================
            // NHÀ CUNG CẤP 1
            // ==========================================
            [
                'id_user' => null,
                'id_supplier_group' => 1,

                'ma_nha_cung_cap' => 'NCC000001',
                'ten_nha_cung_cap' => 'Công ty TNHH Thực Phẩm An Phát',

                'so_dien_thoai' => '0905123456',
                'email' => 'anphat@gmail.com',

                'dia_chi' => '125 Nguyễn Tất Thành',
                'khu_vuc' => 'Hải Châu',
                'phuong_xa' => 'Phường Thạch Thang',

                'cong_ty' => 'Công ty TNHH Thực Phẩm An Phát',
                'ma_so_thue' => '0401234567',
                'so_cccd_cmnd' => null,

                'ghi_chu' => 'Nhà cung cấp thực phẩm chính',
                'trang_thai' => 1,

                'no_can_tra_hien_tai' => 0,
                'tong_mua' => 0,
                'tong_mua_tru_tra_hang' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // NHÀ CUNG CẤP 2
            // ==========================================
            [
                'id_user' => null,
                'id_supplier_group' => 1,

                'ma_nha_cung_cap' => 'NCC000002',
                'ten_nha_cung_cap' => 'Cơ sở Bánh Kẹo Minh Tâm',

                'so_dien_thoai' => '0915123456',
                'email' => 'minhtam@gmail.com',

                'dia_chi' => '45 Điện Biên Phủ',
                'khu_vuc' => 'Thanh Khê',
                'phuong_xa' => 'Phường Chính Gián',

                'cong_ty' => 'Cơ sở Bánh Kẹo Minh Tâm',
                'ma_so_thue' => '0401234568',
                'so_cccd_cmnd' => null,

                'ghi_chu' => 'Chuyên bánh kẹo và snack',
                'trang_thai' => 1,

                'no_can_tra_hien_tai' => 0,
                'tong_mua' => 0,
                'tong_mua_tru_tra_hang' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // NHÀ CUNG CẤP 3
            // ==========================================
            [
                'id_user' => null,
                'id_supplier_group' => 2,

                'ma_nha_cung_cap' => 'NCC000003',
                'ten_nha_cung_cap' => 'Công ty Đồ Uống Việt Nam',

                'so_dien_thoai' => '0905987654',
                'email' => 'douongvn@gmail.com',

                'dia_chi' => '88 Nguyễn Văn Linh',
                'khu_vuc' => 'Hải Châu',
                'phuong_xa' => 'Phường Nam Dương',

                'cong_ty' => 'Công ty Đồ Uống Việt Nam',
                'ma_so_thue' => '0401234569',
                'so_cccd_cmnd' => null,

                'ghi_chu' => 'Cung cấp nước ngọt và nước suối',
                'trang_thai' => 1,

                'no_can_tra_hien_tai' => 0,
                'tong_mua' => 0,
                'tong_mua_tru_tra_hang' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // NHÀ CUNG CẤP 4
            // ==========================================
            [
                'id_user' => null,
                'id_supplier_group' => 2,

                'ma_nha_cung_cap' => 'NCC000004',
                'ten_nha_cung_cap' => 'Nhà Phân Phối Nước Giải Khát Thành Công',

                'so_dien_thoai' => '0935123456',
                'email' => 'thanhcong@gmail.com',

                'dia_chi' => '210 Lê Duẩn',
                'khu_vuc' => 'Thanh Khê',
                'phuong_xa' => 'Phường Tân Chính',

                'cong_ty' => 'Nhà Phân Phối Nước Giải Khát Thành Công',
                'ma_so_thue' => '0401234570',
                'so_cccd_cmnd' => null,

                'ghi_chu' => 'Giao hàng thứ 2, 4, 6',
                'trang_thai' => 1,

                'no_can_tra_hien_tai' => 0,
                'tong_mua' => 0,
                'tong_mua_tru_tra_hang' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // NHÀ CUNG CẤP 5
            // ==========================================
            [
                'id_user' => null,
                'id_supplier_group' => 3,

                'ma_nha_cung_cap' => 'NCC000005',
                'ten_nha_cung_cap' => 'Gia Dụng Hòa Phát',

                'so_dien_thoai' => '0905234567',
                'email' => 'giadunghoaphat@gmail.com',

                'dia_chi' => '35 Hoàng Diệu',
                'khu_vuc' => 'Hải Châu',
                'phuong_xa' => 'Phường Phước Ninh',

                'cong_ty' => 'Gia Dụng Hòa Phát',
                'ma_so_thue' => '0401234571',
                'so_cccd_cmnd' => null,

                'ghi_chu' => 'Đồ dùng gia đình',
                'trang_thai' => 1,

                'no_can_tra_hien_tai' => 0,
                'tong_mua' => 0,
                'tong_mua_tru_tra_hang' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // NHÀ CUNG CẤP 6
            // ==========================================
            [
                'id_user' => null,
                'id_supplier_group' => 4,

                'ma_nha_cung_cap' => 'NCC000006',
                'ten_nha_cung_cap' => 'Hóa Mỹ Phẩm Phương Nam',

                'so_dien_thoai' => '0916234567',
                'email' => 'phuongnam@gmail.com',

                'dia_chi' => '120 Trần Cao Vân',
                'khu_vuc' => 'Thanh Khê',
                'phuong_xa' => 'Phường Tam Thuận',

                'cong_ty' => 'Hóa Mỹ Phẩm Phương Nam',
                'ma_so_thue' => '0401234572',
                'so_cccd_cmnd' => null,

                'ghi_chu' => 'Cung cấp dầu gội, sữa tắm và sản phẩm cá nhân',
                'trang_thai' => 1,

                'no_can_tra_hien_tai' => 0,
                'tong_mua' => 0,
                'tong_mua_tru_tra_hang' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // NHÀ CUNG CẤP 7
            // ==========================================
            [
                'id_user' => null,
                'id_supplier_group' => 5,

                'ma_nha_cung_cap' => 'NCC000007',
                'ten_nha_cung_cap' => 'Văn Phòng Phẩm Minh Châu',

                'so_dien_thoai' => '0906345678',
                'email' => 'minhchau@gmail.com',

                'dia_chi' => '56 Nguyễn Tri Phương',
                'khu_vuc' => 'Hải Châu',
                'phuong_xa' => 'Phường Thạc Gián',

                'cong_ty' => 'Văn Phòng Phẩm Minh Châu',
                'ma_so_thue' => '0401234573',
                'so_cccd_cmnd' => null,

                'ghi_chu' => 'Văn phòng phẩm và đồ dùng học tập',
                'trang_thai' => 1,

                'no_can_tra_hien_tai' => 0,
                'tong_mua' => 0,
                'tong_mua_tru_tra_hang' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ==========================================
            // NHÀ CUNG CẤP 8
            // ==========================================
            [
                'id_user' => null,
                'id_supplier_group' => 1,

                'ma_nha_cung_cap' => 'NCC000008',
                'ten_nha_cung_cap' => 'Thực Phẩm Sạch Đại Phúc',

                'so_dien_thoai' => '0927345678',
                'email' => 'daiphuc@gmail.com',

                'dia_chi' => '18 Nguyễn Hoàng',
                'khu_vuc' => 'Thanh Khê',
                'phuong_xa' => 'Phường Vĩnh Trung',

                'cong_ty' => 'Thực Phẩm Sạch Đại Phúc',
                'ma_so_thue' => '0401234574',
                'so_cccd_cmnd' => null,

                'ghi_chu' => 'Thực phẩm đóng gói',
                'trang_thai' => 1,

                'no_can_tra_hien_tai' => 0,
                'tong_mua' => 0,
                'tong_mua_tru_tra_hang' => 0,

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
