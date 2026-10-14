<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductComboItem extends Model
{
    protected $table = 'product_combo_items';
    protected $fillable = [
        'id_product_combo',
        'id_product',
        'so_luong',
    ];
}
