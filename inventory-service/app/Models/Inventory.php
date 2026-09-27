<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventories';
    protected $fillable = [
        'id_branch',
        'id_product',
        'so_luong_ton',
        'ton_kho_toi_thieu',
        'ton_kho_toi_da',
        'vi_tri_de_hang',
    ];
}
