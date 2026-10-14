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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->nullable();
            $table->integer('id_store')->nullable();
            $table->integer('id_branch')->nullable();
            $table->integer('id_supplier_group')->nullable();
            $table->string('ma_nha_cung_cap', 50)->unique();
            $table->string('ten_nha_cung_cap', 200);
            // Liên hệ
            $table->string('so_dien_thoai', 20)->nullable();
            $table->string('email', 150)->nullable();

            // Địa chỉ
            $table->string('dia_chi', 255)->nullable();
            $table->string('khu_vuc', 100)->nullable();
            $table->string('phuong_xa', 100)->nullable();

            // Thông tin pháp lý
            $table->string('cong_ty', 200)->nullable();
            $table->string('ma_so_thue', 50)->nullable();
            $table->string('so_cccd_cmnd', 30)->nullable();
            // Khác
            $table->text('ghi_chu')->nullable();
            $table->integer('trang_thai')->default(1);

            // Công nợ và mua hàng
            $table->decimal('no_can_tra_hien_tai', 15, 2)->default(0);
            $table->decimal('tong_mua', 15, 2)->default(0);
            $table->decimal('tong_mua_tru_tra_hang', 15, 2)->default(0);

            $table->softDeletes(); // xóa tạm sẽ kh xóa database 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
