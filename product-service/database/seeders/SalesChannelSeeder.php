<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sales_channels')->truncate();

        DB::table('sales_channels')->insert([
            [
                'channel_code' => 'POS',
                'channel_name' => 'Bán tại cửa hàng',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'channel_code' => 'FACEBOOK',
                'channel_name' => 'Facebook',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'channel_code' => 'SHOPEE',
                'channel_name' => 'Shopee',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'channel_code' => 'WEBSITE',
                'channel_name' => 'Website',
                'trang_thai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
