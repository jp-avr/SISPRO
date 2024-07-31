<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $primaryKey = 'permission_id';

    protected $fillable = [
        'permission_nome',
        'permission'
    ];

    public function roles()
    {
        $this->belongsToMany(Role::class, 'role_permissions', 'role_id', 'permission_id');
    }
}
