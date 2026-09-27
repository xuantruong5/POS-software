<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'id_category',
        'id_store',
        'loai_hang',
        'ten_san_pham',
        'ma_san_pham',
        'ma_vach',
        'hinh_anh',
        'thuong_hieu',
        'don_vi_tinh',
        'trong_luong',
        'gia_von',
        'gia_ban',
        'ban_chay',
        'khach_dat',
        'trang_thai',
    ];
}
