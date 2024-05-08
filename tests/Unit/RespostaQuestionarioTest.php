<?php

namespace Tests\Unit;

use App\Models\RespostasQuestionario;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class RespostaQuestionarioTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRegistrarRespostas(){
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
        $questionario_id = 10;

        $respostas = RespostasQuestionario::criar($questionario_id, $request);

        $this->assertEquals(true, $respostas->wasRecentlyCreated);
    }
}
