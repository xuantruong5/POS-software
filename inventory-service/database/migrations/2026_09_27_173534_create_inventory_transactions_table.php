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
        Schema::create('inventory_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_inventory');
            // Loại giao dịch:
            // nhap
            // xuat
            // dieu_chinh
            // ban_hang
            // tra_hang
            // chuyen_kho
            $table->string('loai_giao_dich', 30);
            // Số lượng thay đổi
            $table->decimal('so_luong', 15, 2);
            // Tồn trước giao dịch
            $table->decimal('so_luong_truoc', 15, 2);
            // Tồn sau giao dịch
            $table->decimal('so_luong_sau', 15, 2);
            // Dùng để liên kết tới phiếu nhập, hóa đơn,
            // đơn trả hàng, phiếu chuyển kho...
            $table->string('reference_type', 50)->nullable();
            $table->unsignedBigInteger('id_reference')->nullable();
            $table->text('ghi_chu')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_transactions');
    }
};
