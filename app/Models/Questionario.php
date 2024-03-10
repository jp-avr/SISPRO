<?php

namespace App\Models;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class Questionario extends Model
{
    protected $table = "questionarios";

    protected $primaryKey = "questionario_id";

    protected $fillable = [
        "processo_id",
        "questionario_data",
        "questionario_resultado",
        "questionario_porcentagem",
    ];

    public static function criar($request, $processo_id, $pos_operatorio){

        $soma = $request->secao_1 + $request->secao_2 + $request->secao_3 + $request->secao_4 + $request->secao_5 + $request->secao_6 + $request->secao_7 + $request->secao_8 + $request->secao_9 + $request->secao_10; /// Soma das seleções
        
        $base = $request->secao_8 == null ? 40 : 50; //base para divisão

        $porcentagem = $soma/$base * 100; /// resultado em porcentagem

        /// resultados baseados na porcentagem

        switch ($pos_operatorio) {
            case 0:
                if($porcentagem <= 20){
                    $resultado = "Pouca ou nenhuma incapacidade funcional.";
                }else if($porcentagem > 20 && $porcentagem <= 40){
                    $resultado = "Limitação moderada nas atividades diárias";
                }else if($porcentagem > 40 && $porcentagem <= 60){
                    $resultado = "Limitação substancial nas atividades diárias";
                }else if($porcentagem > 60 && $porcentagem <= 80){
                    $resultado = "Incapacidade marcante nas atividades diárias";
                }else if($porcentagem > 80){
                    $resultado = "Incapacidade total nas atividades diárias";
                }else{
                    throw ValidationException::withMessages(['erro!' => 'Resultado inválido']);
                }
                break;
            case 1:
                if($porcentagem <= 20){
                    $resultado = "Incrível melhora após o procedimento médico";
                }else if($porcentagem > 20 && $porcentagem <= 40){
                    $resultado = "Boa melhora após o procedimento médico";
                }else if($porcentagem > 40 && $porcentagem <= 60){
                    $resultado = "Não houve melhora após o procedimento médico";
                }else if($porcentagem > 60){
                    $resultado = "Situação do cliente piorou após o procedimento médico";
                }else{
                    throw ValidationException::withMessages(['erro!' => 'Resultado inválido']);
                }
                break;
            default:
                throw ValidationException::withMessages(['erro!' => 'Resultado inválido']);
        }
        
        // dd($resultado);
        $questionario = self::create([
            "processo_id" => $processo_id,
            "questionario_data" => now(),
            "questionario_resultado" => $resultado,
            "questionario_porcentagem" => $porcentagem,
        ]);

        RespostasQuestionario::create([
            "questionario_id" => $questionario->questionario_id,
            'secao_1' => $request->secao_1,
            'secao_2' => $request->secao_2,
            'secao_3' => $request->secao_3,
            'secao_4' => $request->secao_4,
            'secao_5' => $request->secao_5,
            'secao_6' => $request->secao_6,
            'secao_7' => $request->secao_7,
            'secao_8' => $request->secao_8,
            'secao_9' => $request->secao_9,
            'secao_10' => $request->secao_10,
        ]);
    }

    public function processo(){
        return $this->belongsTo(Processo::class, "processo_id", "processo_id");
    }
}
