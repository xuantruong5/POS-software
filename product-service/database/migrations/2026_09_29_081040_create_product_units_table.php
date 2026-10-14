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
        Schema::create('product_units', function (Blueprint $table) {
            $table->id();
            $table->integer('id_product');
            $table->string('ten_don_vi', 50);
            // 1 đơn vị này quy đổi ra bao nhiêu đơn vị cơ bản
            $table->decimal('ty_le_quy_doi', 15, 4)->default(1);
            $table->decimal('gia_ban_don_vi', 15, 2)->default(0);
            $table->integer('ban_truc_tiep')->default(1);
            // Đơn vị cơ bản hay không
            $table->integer('la_don_vi_co_ban')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_units');
    }
};
// đây là bảng chia đơn vị ví dụ như là hộp, lốc , thùng