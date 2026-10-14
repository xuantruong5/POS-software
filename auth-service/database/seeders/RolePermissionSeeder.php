<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('role_permissions')->truncate();

        DB::table('role_permissions')->insert([

            // =====================================================
            // TẠP HÓA - OWNER
            // id_system_role = 1
            // =====================================================

            [
                'id_system_role' => 1,
                'id_permission' => 1, // product.view
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 2, // product.create
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 3, // product.update
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 4, // product.delete
            ],

            [
                'id_system_role' => 1,
                'id_permission' => 5, // sale.view
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 6, // sale.create
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 7, // sale.update
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 8, // sale.cancel
            ],

            [
                'id_system_role' => 1,
                'id_permission' => 9, // customer.view
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 10, // customer.create
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 11, // customer.update
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 12, // customer.delete
            ],

            [
                'id_system_role' => 1,
                'id_permission' => 13, // inventory.view
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 14, // inventory.adjust
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 15, // inventory.transfer
            ],

            [
                'id_system_role' => 1,
                'id_permission' => 16, // user.view
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 17, // user.create
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 18, // user.update
            ],
            [
                'id_system_role' => 1,
                'id_permission' => 19, // user.delete
            ],

            [
                'id_system_role' => 1,
                'id_permission' => 20, // report.view
            ],


            // =====================================================
            // TẠP HÓA - STAFF
            // id_system_role = 2
            // =====================================================

            [
                'id_system_role' => 2,
                'id_permission' => 1, // product.view
            ],
            [
                'id_system_role' => 2,
                'id_permission' => 2, // product.create
            ],
            [
                'id_system_role' => 2,
                'id_permission' => 3, // product.update
            ],

            [
                'id_system_role' => 2,
                'id_permission' => 5, // sale.view
            ],
            [
                'id_system_role' => 2,
                'id_permission' => 6, // sale.create
            ],
            [
                'id_system_role' => 2,
                'id_permission' => 7, // sale.update
            ],

            [
                'id_system_role' => 2,
                'id_permission' => 9, // customer.view
            ],
            [
                'id_system_role' => 2,
                'id_permission' => 10, // customer.create
            ],
            [
                'id_system_role' => 2,
                'id_permission' => 11, // customer.update
            ],

            [
                'id_system_role' => 2,
                'id_permission' => 13, // inventory.view
            ],


            // =====================================================
            // NHÀ HÀNG - OWNER
            // id_system_role = 3
            // =====================================================

            [
                'id_system_role' => 3,
                'id_permission' => 1, // product.view
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 2, // product.create
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 3, // product.update
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 4, // product.delete
            ],

            [
                'id_system_role' => 3,
                'id_permission' => 5, // sale.view
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 6, // sale.create
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 7, // sale.update
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 8, // sale.cancel
            ],

            [
                'id_system_role' => 3,
                'id_permission' => 9, // customer.view
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 10, // customer.create
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 11, // customer.update
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 12, // customer.delete
            ],

            [
                'id_system_role' => 3,
                'id_permission' => 13, // inventory.view
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 14, // inventory.adjust
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 15, // inventory.transfer
            ],

            [
                'id_system_role' => 3,
                'id_permission' => 16, // user.view
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 17, // user.create
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 18, // user.update
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 19, // user.delete
            ],

            [
                'id_system_role' => 3,
                'id_permission' => 20, // report.view
            ],

            [
                'id_system_role' => 3,
                'id_permission' => 21, // table.view
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 22, // table.create
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 23, // table.update
            ],

            [
                'id_system_role' => 3,
                'id_permission' => 24, // kitchen.view
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 25, // kitchen.update
            ],

            [
                'id_system_role' => 3,
                'id_permission' => 26, // reservation.view
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 27, // reservation.create
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 28, // reservation.update
            ],
            [
                'id_system_role' => 3,
                'id_permission' => 29, // reservation.cancel
            ],


            // =====================================================
            // NHÀ HÀNG - STAFF
            // id_system_role = 4
            // =====================================================

            [
                'id_system_role' => 4,
                'id_permission' => 1, // product.view
            ],

            [
                'id_system_role' => 4,
                'id_permission' => 5, // sale.view
            ],
            [
                'id_system_role' => 4,
                'id_permission' => 6, // sale.create
            ],
            [
                'id_system_role' => 4,
                'id_permission' => 7, // sale.update
            ],

            [
                'id_system_role' => 4,
                'id_permission' => 9, // customer.view
            ],
            [
                'id_system_role' => 4,
                'id_permission' => 10, // customer.create
            ],
            [
                'id_system_role' => 4,
                'id_permission' => 11, // customer.update
            ],

            [
                'id_system_role' => 4,
                'id_permission' => 21, // table.view
            ],

            [
                'id_system_role' => 4,
                'id_permission' => 26, // reservation.view
            ],
            [
                'id_system_role' => 4,
                'id_permission' => 27, // reservation.create
            ],
            [
                'id_system_role' => 4,
                'id_permission' => 28, // reservation.update
            ],


            // =====================================================
            // NHÀ HÀNG - KITCHEN
            // id_system_role = 5
            // =====================================================

            [
                'id_system_role' => 5,
                'id_permission' => 1, // product.view
            ],

            [
                'id_system_role' => 5,
                'id_permission' => 24, // kitchen.view
            ],
            [
                'id_system_role' => 5,
                'id_permission' => 25, // kitchen.update
            ],


            // =====================================================
            // NHÀ HÀNG - RECEPTIONIST
            // id_system_role = 6
            // =====================================================

            [
                'id_system_role' => 6,
                'id_permission' => 9, // customer.view
            ],
            [
                'id_system_role' => 6,
                'id_permission' => 10, // customer.create
            ],
            [
                'id_system_role' => 6,
                'id_permission' => 11, // customer.update
            ],

            [
                'id_system_role' => 6,
                'id_permission' => 21, // table.view
            ],

            [
                'id_system_role' => 6,
                'id_permission' => 26, // reservation.view
            ],
            [
                'id_system_role' => 6,
                'id_permission' => 27, // reservation.create
            ],
            [
                'id_system_role' => 6,
                'id_permission' => 28, // reservation.update
            ],
            [
                'id_system_role' => 6,
                'id_permission' => 29, // reservation.cancel
            ],

            [
                'id_system_role' => 6,
                'id_permission' => 5, // sale.view
            ],
            [
                'id_system_role' => 6,
                'id_permission' => 6, // sale.create
            ],

        ]);
    }
}
