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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            // ID chi nhánh từ auth-service
            $table->integer('id_branch');

            // ID sản phẩm từ product-service
            $table->integer('id_product');
            
             // Vị trí sản phẩm trong kho
            $table->integer('id_location')->nullable();

            // Số lượng tồn hiện tại
            $table->decimal('so_luong_ton', 15, 2)->default(0);

            // Mức tồn tối thiểu
            $table->decimal('ton_kho_toi_thieu', 15, 2)->default(0);

            // Mức tồn tối đa
            $table->decimal('ton_kho_toi_da', 15, 2)->default(0);

           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
