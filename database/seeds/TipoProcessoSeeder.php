<?php

namespace Database\seeds;

use App\Models\TipoProcesso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoProcessoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $tipos = ['Processo Administrativo', 'Processo Judiciario'];
        foreach($tipos as $tipo){
            TipoProcesso::create([
                'tipo_processo_descricao' => $tipo,
                'proc_judiciarios_id' => 1,
                'proc_adm_id' =>1
            
            ]);
        }
    }
}
