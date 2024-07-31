<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_name',
        'role',
    ];

    public function users()
    {
        $this->hasMany(User::class, 'role_id', 'role_id');
    }

    public function permissions()
    {
        $this->belongsToMany(Permission::class, 'role_permissions', 'permission_id', 'role_id');
    }
}
