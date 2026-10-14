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
        Schema::create('product_combo_items', function (Blueprint $table) {
            $table->id();
            $table->integer('id_product_combo');// lấy chỗ loại hàng combo số mấy đó của product 
            $table->integer('id_product');
            $table->decimal('so_luong', 15, 2);// mấy cái trong sản phẩm đó vd bánh quy 2 cái 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_combo_items');
    }
};
