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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->integer('id_store');
            $table->integer('id_branch')->nullable();
            $table->string('loai_thong_bao', 50);
            $table->string('tieu_de', 255);
            $table->text('noi_dung');
            $table->integer('id_reference')->nullable();
            $table->boolean('da_doc')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
