<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';
    protected $fillable = [
        'id_store',
        'id_branch',
        'loai_thong_bao',
        'tieu_de',
        'noi_dung',
        'id_reference',
        'da_doc',
    ];
}
