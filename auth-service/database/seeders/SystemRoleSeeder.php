<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('system_roles')->truncate();
        DB::table('system_roles')->insert([
            // =========================
            // TẠP HÓA
            // =========================
            [
                'id_system' => 1,
                'code' => 'OWNER',
                'name' => 'Chủ cửa hàng',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_system' => 1,
                'code' => 'STAFF',
                'name' => 'Nhân viên',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // NHÀ HÀNG
            // =========================
            [
                'id_system' => 2,
                'code' => 'OWNER',
                'name' => 'Chủ nhà hàng',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_system' => 2,
                'code' => 'STAFF',
                'name' => 'Nhân viên',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_system' => 2,
                'code' => 'KITCHEN',
                'name' => 'Nhân viên bếp',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_system' => 2,
                'code' => 'RECEPTIONIST',
                'name' => 'Lễ tân',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
