<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolesPermission extends Model
{
    protected $table = 'roles_permissions';

    protected $primaryKey = 'role_permission_id';

    protected $fillable = [
        'role_id',
        'permission_id'
    ];
}
