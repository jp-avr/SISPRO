<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role_name' => 'Administrator',
            'role' => 'admin',
        ]);

        Role::create([
            'role_name' => 'User',
            'role' => 'user',
        ]);

        Role::create([
            'role_name' => 'Leitor',
            'role' => 'leitor',
        ]);
    }
}
