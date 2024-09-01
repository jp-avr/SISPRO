<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Questionario;
use Illuminate\Http\Request;

class QuestionarioTest extends TestCase
{

    /** @test */
    public function pode_calcular_a_porcentagem_do_questionario()
    {
        $request = Request::create('/', 'POST', [
            'secao_1' => random_int(0, 5),
            'secao_2' => random_int(0, 5),
            'secao_3' => random_int(0, 5),
            'secao_4' => random_int(0, 5),
            'secao_5' => random_int(0, 5),
            'secao_6' => random_int(0, 5),
            'secao_7' => random_int(0, 5),
            'secao_8' => random_int(0, 5),
            'secao_9' => random_int(0, 5),
            'secao_10' => random_int(0, 5),
        ]);

        $porcentagem = Questionario::questionarioPorcentagem($request);

        $this->assertIsInt($porcentagem);
    }

    /** @test */
    public function pode_retornar_o_resultado_do_questionario_para_cliente_nao_pos_operatorio()
    {
        $porcentagem = 65;
        $pos_operatorio = 0;

        // Chamando o método resultadoQuestionario
        $resultado = Questionario::resultadoQuestionario($porcentagem, $pos_operatorio);

        // Verificando o resultado esperado
        $this->assertEquals('Incapacidade marcante nas atividades diárias', $resultado);
    }

    /** @test */
    public function pode_retornar_o_resultado_do_questionario_para_cliente_pos_operatorio()
    {
        $porcentagem = 30;
        $pos_operatorio = 1;

        // Chamando o método resultadoQuestionario
        $resultado = Questionario::resultadoQuestionario($porcentagem, $pos_operatorio);

        // Verificando o resultado esperado
        $this->assertEquals('Boa melhora após o procedimento médico', $resultado);
    }
}

