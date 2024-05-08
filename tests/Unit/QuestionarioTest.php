<?php

namespace Tests\Unit;

use App\Models\Questionario;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class QuestionarioTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testResultadoQuestionario(){
        // Valores teste
        $porcentagem = 5;
        $pos_operatorio = 1;

        $resultado = Questionario::resultadoQuestionario($porcentagem, $pos_operatorio);

        $this->assertEquals('Incrível melhora após o procedimento médico', $resultado);
    }

    public function testQuestionarioPorcentagem(){
        $request = Collection::make([
            "secao_1" => 0,
            "secao_2" => 2,
            "secao_3" => 5,
            "secao_4" => 0,
            "secao_5" => 1,
            "secao_6" => 4,
            "secao_7" => 4,
            "secao_8" => 3,
            "secao_9" => 2,
            "secao_10" => 1
        ]);

        $porcentagem = Questionario::questionarioPorcentagem($request);

        $this->assertEquals(44,$porcentagem);
    }

    public function testRegistrarQuestionario(){
        $request = Collection::make([
            "secao_1" => 0,
            "secao_2" => 2,
            "secao_3" => 5,
            "secao_4" => 0,
            "secao_5" => 1,
            "secao_6" => 4,
            "secao_7" => 4,
            "secao_8" => 3,
            "secao_9" => 2,
            "secao_10" => 1
        ]);

        $pos_operatorio = 0;
        $processo_id = 1;

        $questionario = Questionario::criar($request, $processo_id, $pos_operatorio);

        $this->assertEquals(true, $questionario->wasRecentlyCreated);
    }
}
