<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'id_category',
        'id_store',
        'id_brand',
        'loai_hang',
        'ten_san_pham',
        'ma_san_pham',
        'ma_vach',
        'hinh_anh',
        'thuong_hieu',
        'don_vi_tinh',
        'trong_luong',
        'gia_nhap_cuoi',
        'gia_von',
        'gia_ban',
        'ban_chay',
        'khach_dat',
        'trang_thai',
    ];
    const HANG_HOA = 0;
    const COMBO_DONGGOI = 1;
    const DICH_VU = 2;
    
}
