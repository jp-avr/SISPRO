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
        User::create([
            'name' => 'dev',
            'email' => 'dev@dev.com',
            'role_id' => 1,
            'password' => Hash::make('123'),
        ]);

        User::create([
            'name' => 'Advogado',
            'email' => 'advogado@advogado.com',
            'role_id' => 1,
            'password' => Hash::make('advogado2024'),
        ]);
    }
}
