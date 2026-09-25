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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('ma_cua_hang', 50)->unique();
            $table->string('ten_cua_hang', 150);
            $table->string('so_dien_thoai', 20)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('dia_chi', 255)->nullable();
            $table->string('khu_vuc', 100)->nullable();
            $table->string('phuong_xa', 100)->nullable();
            $table->integer('trang_thai')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
