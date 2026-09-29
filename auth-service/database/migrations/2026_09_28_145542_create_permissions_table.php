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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();// mã quyền như là product.view,product.create,product.update,product.delete
            $table->string('name', 150); // được quyền làm gì như là xem sửa xóa sản phẩm, xem hóa đơn 
            $table->string('module', 100)->nullable(); // ở modules nào vd như product hay sale 
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
        Schema::dropIfExists('permissions');
    }
};
