<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    protected $fillable = [
        'id_store',
        'ma_chi_nhanh',
        'ten_chi_nhanh',
        'so_dien_thoai',
        'dia_chi',
        'khu_vuc',
        'phuong_xa',
        'trang_thai',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'id_store');
    }

    public function users()
    {
        return $this->hasMany(SystemUser::class, 'id_branch');
    }
}
