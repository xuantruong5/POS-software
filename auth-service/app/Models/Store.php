<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    protected $fillable = [
        'id_system',
        'ma_cua_hang',
        'ten_cua_hang',
        'so_dien_thoai',
        'email',
        'dia_chi',
        'khu_vuc',
        'phuong_xa',
        'trang_thai',
    ];
    
    public function system()
    {
        return $this->belongsTo(System::class, 'id_system');
    }

    public function branches()
    {
        return $this->hasMany(Branch::class, 'id_store');
    }

    public function users()
    {
        return $this->hasMany(SystemUser::class, 'id_store');
    }
}
