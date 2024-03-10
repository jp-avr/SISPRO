<?php

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            // 'ocupacao_id' => 1,
            // 'estado_civil_id' => 1,
            'profissao_id' => 1,
            'cbo' => '123456...',
            'cliente_nome' => 'João Pedro',
            'cliente_cpf' => '61007944382',
            'cliente_rg' => '2121321321',
            'cliente_data_nascimento' => date('2000-04-25'),
            'cliente_telefone' => '98991119229',
            'cliente_email' => 'joao@email.com',
            'cliente_sexo' => 1,
            'cliente_ativo' => 1,
        ]);

        Cliente::create([
            // 'ocupacao_id' => 1,
            // 'estado_civil_id' => 1,
            'profissao_id' => 2,
            'cbo' => '123456...',
            'cliente_nome' => 'João Victor',
            'cliente_cpf' => '009.914.340-21',
            'cliente_rg' => '21213211',
            'cliente_data_nascimento' => date('2000-04-25'),
            'cliente_telefone' => '98991119229',
            'cliente_email' => 'jv@email.com',
            'cliente_sexo' => 1,
            'cliente_ativo' => 1,
        ]);
    }
}
