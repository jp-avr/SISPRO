<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adm = User::create([
            'name' => 'dev',
            'email' => 'dev@dev.com',
//            'role_id' => 1,
            'password' => Hash::make('123'),
        ]);

        $adm->assignRole('Admin');

        $user = User::create([
            'name' => 'Advogado',
            'email' => 'advogado@advogado.com',
//            'role_id' => 1,
            'password' => Hash::make('advogado2024'),
        ]);

        $user->assignRole('User');

        $user = User::create([
            'name' => 'Leitor',
            'email' => 'leitor@leitor.com',
//            'role_id' => 1,
            'password' => Hash::make('1234'),
        ]);

        $user->assignRole('Leitor');
    }
}
