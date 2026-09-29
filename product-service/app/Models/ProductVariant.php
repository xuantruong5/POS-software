<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $table = 'product_variants';
    protected $fillable = [
        'id_product',
        'ten_bien_the',
        'ma_bien_the',
        'ma_vach',
        'huong_vi',
        'dung_tich',
        'mau_sac',
        'trong_luong',
        'kich_thuoc',
        'gia_tri',
        'gia_nhap_cuoi',
        'gia_von',
        'gia_ban',
    ];
}
