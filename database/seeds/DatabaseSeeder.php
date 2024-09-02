<?php

use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ProfissaoSeeder::class,
            ClienteSeeder::class,
            CidSeeder::class,
            TipoProcessoSeeder::class,
            ParteAtingidaSeeder::class,
            ProcessoSeeder::class
        ]);
    }
}
