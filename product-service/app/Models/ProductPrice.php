<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $table = 'product_prices';
    protected $fillable = [
        'id_price_list',
        'id_product',
        'gia_ban',
    ];
}
