<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = [
        'code',
        'name',
        'module',
        'mo_ta',
        'trang_thai',
    ];
    public function roles()
    {
        return $this->belongsToMany( SystemRole::class, 'role_permissions', 'id_permission', 'id_system_role' );
    }
}
