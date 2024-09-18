<?php

use App\Models\Cliente;
use App\Models\Processo;
use Illuminate\Database\Seeder;

class ProcessoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cliente::class, 20)->create()->each(function ($cliente) {
            $processo = factory(Processo::class)->make();
            $cliente->processos()->save($processo);

            $processo->cids()->sync(random_int(1,300));
        });
    }
}
