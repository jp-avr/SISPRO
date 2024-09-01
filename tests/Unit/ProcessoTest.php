<?php

namespace Tests\Unit;

use App\Models\Profissao;
use Tests\TestCase;
use App\Models\Processo;
use App\Models\Cliente;
use App\Models\ParteAtingida;
use App\Models\TipoProcesso;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProcessoTest extends TestCase
{
    use RefreshDatabase;

    protected $cliente;
    protected $parteAtingida;
    protected $tipoProcesso;

    protected $profissao;

    protected function setUp(): void
    {
        parent::setUp();

        $this->profissao = Profissao::create([
            'profissao_descricao' => 'Desenvolvedor',
        ]);

        $this->cliente = Cliente::create([
            'profissao_id' => 1,
            'cbo' => '1234',
            'cliente_nome' => 'cliente',
            'cliente_cpf' => '12345678912',
            'cliente_rg' => '0000000000',
            'cliente_data_nascimento' => now(),
            'cliente_telefone' => '123456789',
            'cliente_email' => 'email@email.com',
            'cliente_sexo' => 'M',
            'cliente_ativo' => 1,
        ]);

        $this->parteAtingida = ParteAtingida::create([
            'parte_atingida_descricao' => 'cabeça',
            'parte_atingida_codigo' => 1234
        ]);
        $this->tipoProcesso = TipoProcesso::create([
            'tipo_processo_descricao' => 'Geral',
        ]);
    }

    /** @test */
    public function pode_criar_um_processo()
    {
        Processo::create([
            'cliente_id' => $this->cliente->cliente_id,
            'tipo_processo_id' => $this->tipoProcesso->tipo_processo_id,
            'parte_atingida_id' => $this->parteAtingida->parte_atingida_id,
            'proc_data_ini_doenca' => now(),
            'proc_data_ini_incapacidade' => now(),
            'proc_historia' => 'texto',
            'proc_consideracoes' => 'Considerações',
            'proc_numero_proc' => '123456789',
            'proc_resultado' => 'Aprovado',
            'proc_ativo' => true,
            'proc_finalizado' => false,
        ]);

        $this->assertDatabaseHas('processos', [
            'proc_numero_proc' => '123456789',
            'proc_resultado' => 'Aprovado',
        ]);
    }

    /** @test */
    public function pode_atualizar_um_processo()
    {
        $processo = Processo::create([
            'cliente_id' => $this->cliente->cliente_id,
            'tipo_processo_id' => $this->tipoProcesso->tipo_processo_id,
            'parte_atingida_id' => $this->parteAtingida->parte_atingida_id,
            'proc_data_ini_doenca' => now(),
            'proc_data_ini_incapacidade' => now(),
            'proc_historia' => 'texto',
            'proc_consideracoes' => 'Considerações',
            'proc_numero_proc' => '123456789',
            'proc_resultado' => 'Aprovado',
            'proc_ativo' => true,
            'proc_finalizado' => false,
        ]);

        $processo->update([
            'proc_resultado' => 'Negado',
        ]);

        $this->assertDatabaseHas('processos', [
            'proc_numero_proc' => '123456789',
            'proc_resultado' => 'Negado',
        ]);
    }

    /** @test */
    public function pode_excluir_um_processo()
    {
        $processo = Processo::create([
            'cliente_id' => $this->cliente->cliente_id,
            'tipo_processo_id' => $this->tipoProcesso->tipo_processo_id,
            'parte_atingida_id' => $this->parteAtingida->parte_atingida_id,
            'proc_data_ini_doenca' => now(),
            'proc_data_ini_incapacidade' => now(),
            'proc_historia' => 'texto',
            'proc_consideracoes' => 'Considerações',
            'proc_numero_proc' => '123456789',
            'proc_resultado' => 'Aprovado',
            'proc_ativo' => true,
            'proc_finalizado' => false,
        ]);

        $processo->delete();

        $this->assertDatabaseMissing('processos', [
            'proc_numero_proc' => '123456789',
        ]);
    }
}

