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
        $this->call(UserSeeder::class);
        $this->call(EstadoCivilSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(CidSeeder::class);
        $this->call(TipoProcessoSeeder::class);
        $this->call(ProfissaoSeeder::class);
        $this->call(ParteAtingidaSeeder::class);
        $this->call(ProcessoSeeder::class);
    }
}
