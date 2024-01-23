<?php

use App\Models\TipoProcesso;
use Illuminate\Database\Seeder;

class TipoProcessoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos_processos = [
            'Processo Administrativo',
            'Processo Judiciário'
        ];

        foreach ($tipos_processos as $tipo_processo){
            TipoProcesso::create([
                'tipo_processo_descricao' => $tipo_processo
            ]);
        }
    }
}
