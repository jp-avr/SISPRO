<?php

namespace Tests\Unit;

use App\Models\Profissao;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Cliente;

class ClientTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Profissao::create([
            'profissao_descricao' => 'Desenvolvedor',
        ]);
    }

    /** @test */
    public function pode_criar_um_cliente()
    {
        // Arrange: Prepare the data
        $data = [
            'profissao_id' => 1,
            'cbo' => '2525-05',
            'cliente_nome' => 'John Doe',
            'cliente_cpf' => '123.456.789-09',
            'cliente_rg' => '12.345.678-9',
            'cliente_data_nascimento' => '1985-06-15',
            'cliente_telefone' => '(99) 99999-9999',
            'cliente_email' => 'johndoe@example.com',
            'cliente_sexo' => 'M',
            'cliente_ativo' => true,
        ];


        Cliente::create($data);

        $this->assertDatabaseHas('clientes', [
            'cliente_nome' => 'John Doe',
            'cliente_cpf' => '123.456.789-09',
        ]);
    }

    /** @test */
    public function pode_atualizar_um_cliente()
    {
        $cliente = Cliente::create([
            'profissao_id' => 1,
            'cbo' => '2525-05',
            'cliente_nome' => 'Jane Doe',
            'cliente_cpf' => '987.654.321-00',
            'cliente_rg' => '98.765.432-1',
            'cliente_data_nascimento' => '1990-10-25',
            'cliente_telefone' => '(88) 88888-8888',
            'cliente_email' => 'janedoe@example.com',
            'cliente_sexo' => 'F',
            'cliente_ativo' => true,
        ]);


        $cliente->update([
            'cliente_nome' => 'Jane Smith',
        ]);


        $this->assertDatabaseHas('clientes', [
            'cliente_nome' => 'Jane Smith',
        ]);
    }

    /** @test */
    public function pode_excluir_um_cliente()
    {
        $cliente = Cliente::create([
            'profissao_id' => 1,
            'cbo' => '2525-05',
            'cliente_nome' => 'Delete Me',
            'cliente_cpf' => '999.999.999-99',
            'cliente_rg' => '99.999.999-9',
            'cliente_data_nascimento' => '1980-01-01',
            'cliente_telefone' => '(77) 77777-7777',
            'cliente_email' => 'deleteme@example.com',
            'cliente_sexo' => 'M',
            'cliente_ativo' => true,
        ]);

        $cliente->delete();

        $this->assertDatabaseMissing('clientes', [
            'cliente_nome' => 'Delete Me',
        ]);
    }
}
