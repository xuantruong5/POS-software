<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViTriDeHang extends Model
{
    protected $table = 'vi_tri_de_hang';
    protected $fillable = [
        'id_branch',
        'ten_vi_tri',
        'trang_thai',
    ];
}
