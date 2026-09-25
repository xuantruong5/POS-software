<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('id_category');
            $table->integer('id_store');
            $table->string('loai_hang', 30)->default('hang_hoa'); // combo hay là dịch vụ gì đó 
             // Thông tin sản phẩm
            $table->string('ten_san_pham', 200);
            $table->string('ma_san_pham', 50)->nullable()->unique();
            $table->string('ma_vach', 100)->nullable()->unique();
            $table->string('hinh_anh', 500)->nullable();
            $table->string('thuong_hieu', 100)->nullable();
            $table->string('don_vi_tinh', 50)->nullable();
            $table->decimal('trong_luong', 15, 2)->nullable();
            // Giá
            $table->decimal('gia_von', 15, 2)->default(0);
            $table->decimal('gia_ban', 15, 2)->default(0);
            // Kho
            $table->decimal('so_luong_ton', 15, 2)->default(0);
            $table->string('vi_tri_de_hang', 100)->nullable();
            $table->decimal('ton_kho_toi_thieu', 15, 2)->default(0);
            $table->decimal('ton_kho_toi_da', 15, 2)->default(0);
            // Bán hàng
            $table->boolean('ban_chay')->default(false);
            $table->boolean('khach_dat')->default(false);
            $table->integer('trang_thai')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
