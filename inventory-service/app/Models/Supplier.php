<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;
    protected $table = 'suppliers';
    protected $fillable = [
        'id_user',
        'id_store',
        'id_branch',
        'id_supplier_group',
        'ma_nha_cung_cap',
        'ten_nha_cung_cap',
        'so_dien_thoai',
        'email',
        'dia_chi',
        'khu_vuc',
        'phuong_xa',
        'cong_ty',
        'ma_so_thue',
        'so_cccd_cmnd',
        'ghi_chu',
        'no_can_tra_hien_tai',
        'tong_mua',
        'tong_mua_tru_tra_hang',
        'trang_thai',
        'created_at',
        'updated_at',

    ];
    const DANG_HOAT_DONG = 1;
    const DUNG_HOAT_DONG = 0;
}
