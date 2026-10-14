<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierGroup extends Model
{
    protected $table = 'supplier_groups';
    protected $fillable = [
        'ten_nhom',
        'mo_ta',
        'trang_thai',
    ];
   const DANG_HOAT_DONG = 1;
   const DUNG_HOAT_DONG = 0;

}

