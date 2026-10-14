<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SystemUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('system_users')->truncate();
        DB::table('system_users')->insert([
            // =========================
            // TẠP HÓA - CƠ SỞ 1
            // =========================
            [
                'id_store' => 1,
                'id_branch' => 1,
                'id_system_role' => 1,
                'ho_ten' => 'Phạm Thị Sửu',
                'email' => 'phamsuu1973@gmail.com',
                'password' => Hash::make('123456'),
                'so_dien_thoai' => '0973325931',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_store' => 1,
                'id_branch' => 1,
                'id_system_role' => 2,
                'ho_ten' => 'Trần Xuân Đỉnh',
                'email' => 'xuandinh1971@gmail.com',
                'password' => Hash::make('123456'),
                'so_dien_thoai' => '0974401645',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // TẠP HÓA - CƠ SỞ 2
            // =========================
            [
                'id_store' => 1,
                'id_branch' => 2,
                'id_system_role' => 2,
                'ho_ten' => 'Nhân viên Tạp Hóa 2',
                'email' => 'staff2.taphoa@example.com',
                'password' => Hash::make('123456'),
                'so_dien_thoai' => '0905111113',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // NHÀ HÀNG - CƠ SỞ 1
            // =========================
            [
                'id_store' => 2,
                'id_branch' => 3,
                'id_system_role' => 3,
                'ho_ten' => 'Chủ Nhà Hàng',
                'email' => 'owner.nhahang@example.com',
                'password' => Hash::make('123456'),
                'so_dien_thoai' => '0905333333',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_store' => 2,
                'id_branch' => 3,
                'id_system_role' => 4,
                'ho_ten' => 'Nhân viên Nhà Hàng',
                'email' => 'staff.nhahang@example.com',
                'password' => Hash::make('123456'),
                'so_dien_thoai' => '0905333334',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_store' => 2,
                'id_branch' => 3,
                'id_system_role' => 5,
                'ho_ten' => 'Nhân viên Bếp',
                'email' => 'kitchen.nhahang@example.com',
                'password' => Hash::make('123456'),
                'so_dien_thoai' => '0905333335',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_store' => 2,
                'id_branch' => 3,
                'id_system_role' => 6,
                'ho_ten' => 'Lễ tân Nhà Hàng',
                'email' => 'receptionist.nhahang@example.com',
                'password' => Hash::make('123456'),
                'so_dien_thoai' => '0905333336',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
