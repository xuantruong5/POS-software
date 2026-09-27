<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class SystemUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'system_users';
    protected $fillable = [
        'id_store',
        'id_branch',
        'id_system_role',
        'ho_ten',
        'email',
        'password',
        'so_dien_thoai',
        'trang_thai',
    ];
    protected $hidden = [
        'password',
    ];
    public function store()
    {
        return $this->belongsTo(Store::class, 'id_store');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'id_branch');
    }

    public function role()
    {
        return $this->belongsTo(SystemRole::class, 'id_system_role');
    }

}
