<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    protected $table = 'price_lists';
     protected $fillable = [
        'ten_bang_gia',
        'loai_bang_gia',
        'mo_ta',
        'tu_ngay',
        'den_ngay',
        'trang_thai',
        'cho_ban_ngoai_bang_gia',
        'canh_bao_ngoai_bang_gia',

        // Công thức giá
        'loai_cong_thuc',
        'id_bang_gia_goc',
        'phep_tinh',
        'gia_tri_cong_thuc',
        'don_vi_cong_thuc',
    ];
    const AP_DUNG = 1; // trang_thai
    const CHUA_AP_DUNG = 0; // trang_thai
}
