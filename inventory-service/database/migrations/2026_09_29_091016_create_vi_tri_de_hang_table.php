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
        Schema::create('vi_tri_de_hang', function (Blueprint $table) {
            $table->id();
              // ID chi nhánh từ auth-service
            $table->integer('id_branch')->nullable();
            // Tên vị trí để hàng
            $table->string('ten_vi_tri', 100);
            // 1: đang sử dụng, 0: ngừng sử dụng
            $table->integer('trang_thai')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vi_tri_de_hang');
    }
};
