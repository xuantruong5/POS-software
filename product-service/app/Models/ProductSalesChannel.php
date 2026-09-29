<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSalesChannel extends Model
{
    protected $table = 'product_sales_channels';
    protected $fillable = [
        'id_product',
        'id_sales_channel',
    ];
}
