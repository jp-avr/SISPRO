<?php

use App\Models\RolesPermission;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ADMIN
        $permissions = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19];
        foreach ($permissions as $permission) {
            RolesPermission::create([
                'role_id' => 1,
               'permission_id' => $permission,
            ]);
        }

        //USER
        $permissions = [1,2,3,5,6,7,8,9,10,12,13,14,15,16,17,19];
        foreach ($permissions as $permission) {
            RolesPermission::create([
                'role_id' => 2,
                'permission_id' => $permission,
            ]);
        }

        //Leitor
        $permissions = [1,5,6,12,13,19];
        foreach ($permissions as $permission) {
            RolesPermission::create([
                'role_id' => 3,
                'permission_id' => $permission,
            ]);
        }
    }
}
