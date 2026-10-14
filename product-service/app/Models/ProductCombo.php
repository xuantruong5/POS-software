<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCombo extends Model
{
    protected $table = 'product_combos';
    protected $fillable = [
        'id_product',
        'mo_ta',
        'ghi_chu',
    ];
}
