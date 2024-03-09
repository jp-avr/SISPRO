<?php

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
        Processo::create([
            'cliente_id' => 1,
            'tipo_processo_id' => 1,
            'proc_numero_proc' => '12345678',
            'proc_data_ini_doenca' => '2024-03-09',
            'proc_data_ini_incapacidade' => '2024-03-09',
            // 'proc_resultado',
            'proc_historia' => 'O paciente caiu da escada e quebrou a perna',
            // 'proc_exame_fisico' => 1,
            'proc_parte_atingida' => 'Perna',
            'proc_consideracoes' => 'O requerente encontra-se impossibilitado de continuar o trabalho',
            // 'proc_ativo',
        ]);

        Processo::create([
            'cliente_id' => 1,
            'tipo_processo_id' => 2,
            'proc_numero_proc' => '123456789',
            'proc_data_ini_doenca' => '2024-03-09',
            'proc_data_ini_incapacidade' => '2024-03-09',
            // 'proc_resultado',
            'proc_historia' => 'O paciente caiu da escada e quebrou a perna',
            // 'proc_exame_fisico' => 1,
            'proc_parte_atingida' => 'Perna',
            'proc_consideracoes' => 'O requerente encontra-se impossibilitado de continuar o trabalho',
            // 'proc_ativo',
        ]);
    }
}
