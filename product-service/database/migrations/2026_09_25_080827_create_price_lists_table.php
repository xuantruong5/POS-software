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
        Schema::create('price_lists', function (Blueprint $table) { 
            $table->id();
            $table->string('ten_bang_gia', 150);
            $table->string('loai_bang_gia', 30);
            $table->text('mo_ta')->nullable();
            $table->integer('trang_thai')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_lists');
    }
};

// bảng này là thông tin bán sỉ lẻ ..... liên kết với bảng product_price dưới để làm giá bán 
