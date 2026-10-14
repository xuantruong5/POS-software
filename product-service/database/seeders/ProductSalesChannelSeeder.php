<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSalesChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('product_sales_channels')->truncate();

        DB::table('product_sales_channels')->insert([

            // =====================================================
            // SP001
            // =====================================================
            [
                'id_product' => 1,
                'id_sales_channel' => 1, // POS
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 1,
                'id_sales_channel' => 2, // Facebook
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 1,
                'id_sales_channel' => 3, // Shopee
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 1,
                'id_sales_channel' => 4, // Website
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP002
            // =====================================================
            [
                'id_product' => 2,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 2,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 2,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 2,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP003
            // =====================================================
            [
                'id_product' => 3,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 3,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 3,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 3,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP004
            // =====================================================
            [
                'id_product' => 4,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 4,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 4,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 4,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP005
            // =====================================================
            [
                'id_product' => 5,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 5,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 5,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 5,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP006
            // =====================================================
            [
                'id_product' => 6,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 6,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 6,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 6,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP007
            // =====================================================
            [
                'id_product' => 7,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 7,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 7,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 7,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP008
            // =====================================================
            [
                'id_product' => 8,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 8,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 8,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 8,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP009
            // =====================================================
            [
                'id_product' => 9,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 9,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 9,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 9,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP010
            // =====================================================
            [
                'id_product' => 10,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 10,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 10,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP011
            // =====================================================
            [
                'id_product' => 11,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 11,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 11,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 11,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP012
            // =====================================================
            [
                'id_product' => 12,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 12,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 12,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 12,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP013
            // =====================================================
            [
                'id_product' => 13,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 13,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 13,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 13,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP014
            // =====================================================
            [
                'id_product' => 14,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 14,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 14,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 14,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP015
            // =====================================================
            [
                'id_product' => 15,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 15,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 15,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 15,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP016
            // =====================================================
            [
                'id_product' => 16,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 16,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 16,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 16,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP017
            // =====================================================
            [
                'id_product' => 17,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 17,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 17,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP018
            // =====================================================
            [
                'id_product' => 18,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 18,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 18,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 18,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP019
            // =====================================================
            [
                'id_product' => 19,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 19,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 19,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 19,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP020
            // =====================================================
            [
                'id_product' => 20,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 20,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 20,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 20,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP021
            // =====================================================
            [
                'id_product' => 21,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 21,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 21,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP022
            // =====================================================
            [
                'id_product' => 22,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 22,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 22,
                'id_sales_channel' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 22,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP023 - COMBO ĂN SÁNG
            // =====================================================
            [
                'id_product' => 23,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 23,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 23,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =====================================================
            // SP024 - COMBO ĂN VẶT
            // =====================================================
            [
                'id_product' => 24,
                'id_sales_channel' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 24,
                'id_sales_channel' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 24,
                'id_sales_channel' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
