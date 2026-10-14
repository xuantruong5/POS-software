<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemRole extends Model
{
    protected $table = 'system_roles';
    protected $fillable = [
        'id_system',
        'code',
        'name',
        'trang_thai',
    ];

    public function system()
    {
        return $this->belongsTo(System::class, 'id_system');
    }

    public function users()
    {
        return $this->hasMany(SystemUser::class, 'id_system_role');
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'role_permissions','id_system_role','id_permission');
    }




}
