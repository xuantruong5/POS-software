<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCombo extends Model
{
    protected $table = 'product_combos';
    protected $fillable = [
        'id_combo_product',
        'id_product',
        'so_luong',
    ];
}
