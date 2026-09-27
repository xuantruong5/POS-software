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
        'trang_thai',
    ];
}
