<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBranch extends Model
{
    protected $table = 'product_branches';
    protected $fillable = [
        'id_product',
        'id_branch',
        'trang_thai',
    ];
}
