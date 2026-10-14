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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->integer('id_product');
            $table->string('ten_bien_the', 150)->nullable();
            $table->string('ma_bien_the', 100)->unique();
            $table->string('ma_vach', 100)->nullable()->unique();
            $table->string('huong_vi', 100)->nullable();
            $table->string('dung_tich', 100)->nullable();
            $table->string('mau_sac', 100)->nullable();
            $table->decimal('trong_luong', 10, 2)->nullable();
            $table->string('kich_thuoc', 100)->nullable();
            $table->decimal('gia_tri', 15, 2)->default(0);
            $table->decimal('gia_nhap_cuoi', 15, 2)->default(0);
            $table->decimal('gia_von', 15, 2)->default(0);
            $table->decimal('gia_ban', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
