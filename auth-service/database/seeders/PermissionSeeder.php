<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->truncate();
        DB::table('permissions')->insert([
            // =========================
            // SẢN PHẨM
            // =========================
            [
                'code' => 'product.view',
                'name' => 'Xem sản phẩm',
                'module' => 'product',
                'mo_ta' => 'Xem danh sách và thông tin sản phẩm',
                'trang_thai' => 1,
            ],
            [
                'code' => 'product.create',
                'name' => 'Thêm sản phẩm',
                'module' => 'product',
                'mo_ta' => 'Thêm sản phẩm mới',
                'trang_thai' => 1,
            ],
            [
                'code' => 'product.update',
                'name' => 'Sửa sản phẩm',
                'module' => 'product',
                'mo_ta' => 'Cập nhật thông tin sản phẩm',
                'trang_thai' => 1,
            ],
            [
                'code' => 'product.delete',
                'name' => 'Xóa sản phẩm',
                'module' => 'product',
                'mo_ta' => 'Xóa sản phẩm',
                'trang_thai' => 1,
            ],

            // =========================
            // BÁN HÀNG
            // =========================
            [
                'code' => 'sale.view',
                'name' => 'Xem bán hàng',
                'module' => 'sale',
                'mo_ta' => 'Xem thông tin đơn bán hàng',
                'trang_thai' => 1,
            ],
            [
                'code' => 'sale.create',
                'name' => 'Tạo đơn bán hàng',
                'module' => 'sale',
                'mo_ta' => 'Tạo đơn bán hàng mới',
                'trang_thai' => 1,
            ],
            [
                'code' => 'sale.update',
                'name' => 'Sửa đơn bán hàng',
                'module' => 'sale',
                'mo_ta' => 'Cập nhật đơn bán hàng',
                'trang_thai' => 1,
            ],
            [
                'code' => 'sale.cancel',
                'name' => 'Hủy đơn bán hàng',
                'module' => 'sale',
                'mo_ta' => 'Hủy đơn bán hàng',
                'trang_thai' => 1,
            ],

            // =========================
            // KHÁCH HÀNG
            // =========================
            [
                'code' => 'customer.view',
                'name' => 'Xem khách hàng',
                'module' => 'customer',
                'mo_ta' => 'Xem danh sách khách hàng',
                'trang_thai' => 1,
            ],
            [
                'code' => 'customer.create',
                'name' => 'Thêm khách hàng',
                'module' => 'customer',
                'mo_ta' => 'Thêm khách hàng mới',
                'trang_thai' => 1,
            ],
            [
                'code' => 'customer.update',
                'name' => 'Sửa khách hàng',
                'module' => 'customer',
                'mo_ta' => 'Cập nhật thông tin khách hàng',
                'trang_thai' => 1,
            ],
            [
                'code' => 'customer.delete',
                'name' => 'Xóa khách hàng',
                'module' => 'customer',
                'mo_ta' => 'Xóa khách hàng',
                'trang_thai' => 1,
            ],

            // =========================
            // KHO
            // =========================
            [
                'code' => 'inventory.view',
                'name' => 'Xem kho',
                'module' => 'inventory',
                'mo_ta' => 'Xem tồn kho',
                'trang_thai' => 1,
            ],
            [
                'code' => 'inventory.adjust',
                'name' => 'Điều chỉnh kho',
                'module' => 'inventory',
                'mo_ta' => 'Điều chỉnh số lượng tồn kho',
                'trang_thai' => 1,
            ],
            [
                'code' => 'inventory.transfer',
                'name' => 'Chuyển kho',
                'module' => 'inventory',
                'mo_ta' => 'Chuyển sản phẩm giữa các chi nhánh',
                'trang_thai' => 1,
            ],

            // =========================
            // NGƯỜI DÙNG
            // =========================
            [
                'code' => 'user.view',
                'name' => 'Xem người dùng',
                'module' => 'user',
                'mo_ta' => 'Xem danh sách nhân viên',
                'trang_thai' => 1,
            ],
            [
                'code' => 'user.create',
                'name' => 'Thêm người dùng',
                'module' => 'user',
                'mo_ta' => 'Tạo tài khoản nhân viên',
                'trang_thai' => 1,
            ],
            [
                'code' => 'user.update',
                'name' => 'Sửa người dùng',
                'module' => 'user',
                'mo_ta' => 'Cập nhật thông tin người dùng',
                'trang_thai' => 1,
            ],
            [
                'code' => 'user.delete',
                'name' => 'Xóa người dùng',
                'module' => 'user',
                'mo_ta' => 'Xóa tài khoản người dùng',
                'trang_thai' => 1,
            ],

            // =========================
            // BÁO CÁO
            // =========================
            [
                'code' => 'report.view',
                'name' => 'Xem báo cáo',
                'module' => 'report',
                'mo_ta' => 'Xem các báo cáo kinh doanh',
                'trang_thai' => 1,
            ],

            // =========================
            // BÀN NHÀ HÀNG
            // =========================
            [
                'code' => 'table.view',
                'name' => 'Xem bàn',
                'module' => 'table',
                'mo_ta' => 'Xem danh sách và trạng thái bàn',
                'trang_thai' => 1,
            ],
            [
                'code' => 'table.create',
                'name' => 'Thêm bàn',
                'module' => 'table',
                'mo_ta' => 'Thêm bàn nhà hàng',
                'trang_thai' => 1,
            ],
            [
                'code' => 'table.update',
                'name' => 'Sửa bàn',
                'module' => 'table',
                'mo_ta' => 'Cập nhật thông tin bàn',
                'trang_thai' => 1,
            ],

            // =========================
            // BẾP
            // =========================
            [
                'code' => 'kitchen.view',
                'name' => 'Xem đơn bếp',
                'module' => 'kitchen',
                'mo_ta' => 'Xem các món cần chế biến',
                'trang_thai' => 1,
            ],
            [
                'code' => 'kitchen.update',
                'name' => 'Cập nhật trạng thái bếp',
                'module' => 'kitchen',
                'mo_ta' => 'Cập nhật trạng thái món ăn',
                'trang_thai' => 1,
            ],

            // =========================
            // ĐẶT BÀN
            // =========================
            [
                'code' => 'reservation.view',
                'name' => 'Xem đặt bàn',
                'module' => 'reservation',
                'mo_ta' => 'Xem danh sách đặt bàn',
                'trang_thai' => 1,
            ],
            [
                'code' => 'reservation.create',
                'name' => 'Tạo đặt bàn',
                'module' => 'reservation',
                'mo_ta' => 'Tạo yêu cầu đặt bàn',
                'trang_thai' => 1,
            ],
            [
                'code' => 'reservation.update',
                'name' => 'Sửa đặt bàn',
                'module' => 'reservation',
                'mo_ta' => 'Cập nhật thông tin đặt bàn',
                'trang_thai' => 1,
            ],
            [
                'code' => 'reservation.cancel',
                'name' => 'Hủy đặt bàn',
                'module' => 'reservation',
                'mo_ta' => 'Hủy đặt bàn',
                'trang_thai' => 1,
            ],
        ]);
    }
}
