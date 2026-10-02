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
            $table->string('loai_bang_gia', 30)->nullable();
            $table->text('mo_ta')->nullable();
             // Thời gian hiệu lực
            $table->dateTime('tu_ngay')->nullable();
            $table->dateTime('den_ngay')->nullable();
            
            $table->integer('trang_thai')->default(1);
                    // Khi thu ngân:
            // 1 = được phép bán hàng không có trong bảng giá
            // 0 = chỉ được bán hàng có trong bảng giá
            $table->integer('cho_ban_ngoai_bang_gia')->default(1);
            // 1 = cảnh báo khi bán hàng không có trong bảng giá
            // 0 = không cảnh báo
            $table->integer('canh_bao_ngoai_bang_gia')->default(0);

             // gia_von // gia_nhap_cuoi // bang_gia
            $table->string('loai_cong_thuc', 30)->nullable();

             // Chỉ dùng khi loai_cong_thuc = bang_gia
            // Lưu id của bảng giá được dùng làm cơ sở
            $table->unsignedBigInteger('id_bang_gia_goc')->nullable();

            // cong / tru
            $table->string('phep_tinh', 10)->nullable();

            // Ví dụ:
            // 10 nếu tăng 10%
            // 5000 nếu cộng 5.000 VNĐ
            $table->decimal('gia_tri_cong_thuc', 15, 2)->nullable();

            // percent / vnd
            $table->string('don_vi_cong_thuc', 10)->nullable();

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
