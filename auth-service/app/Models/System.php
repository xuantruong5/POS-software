<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class System extends Model
{
    use HasFactory;
    protected $table = 'systems';
    protected $fillable = [
        'code',
        'name',
        'trang_thai',
    ];
    
    public function roles()
    {
        return $this->hasMany(SystemRole::class, 'id_system');
    }

    public function stores()
    {
        return $this->hasMany(Store::class, 'id_system');
    }

}
