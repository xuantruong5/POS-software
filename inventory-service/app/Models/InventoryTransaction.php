<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryTransaction extends Model
{
    protected $table = 'inventory_transactions';
    protected $fillable = [
        'id_inventory',
        'loai_giao_dich',
        'so_luong',
        'so_luong_truoc',
        'so_luong_sau',
        'reference_type',
        'id_reference',
        'ghi_chu',
    ];
}
