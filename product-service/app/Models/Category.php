<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'id_parent',
        'ten_danh_muc',
        'mo_ta',
        'trang_thai',
    ];
}
