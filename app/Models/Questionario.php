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

    public static function questionarioPorcentagem($request) : int {
        //Soma dos valores selecionados no questionario para gerar a porcentagem utilizada para analisar o resultado
        $soma = $request->secao_1 + $request->secao_2 + $request->secao_3 + $request->secao_4 + $request->secao_5 + $request->secao_6 + $request->secao_7 + $request->secao_8 + $request->secao_9 + $request->secao_10; /// Soma das seleções
        
        $base = $request->secao_8 == null ? 40 : 50; //base para divisão

        $porcentagem = $soma/$base * 100;

        return $porcentagem;
    }
    
    public static function resultadoQuestionario($porcentagem,$pos_operatorio){
        switch ($pos_operatorio) {
            case 0://Resultados possiveis para clientes que não estão em pós operatorio
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
            case 1://Resultados possiveis para clientes que estão em pós operatorio
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

        return $resultado;
    }

    public static function criar($request, $processo_id, $pos_operatorio){

        // Chamando as funções que calculam o resultado do questionario
        $porcentagem = self::questionarioPorcentagem($request);
        $resultado = self::resultadoQuestionario($porcentagem, $pos_operatorio);
        
        // dd($resultado);
        $questionario = self::create([
            "processo_id" => $processo_id,
            "questionario_data" => now(),
            "questionario_resultado" => $resultado,
            "questionario_porcentagem" => $porcentagem,
        ]);

        return $questionario;
    }

    public function processo(){
        return $this->belongsTo(Processo::class, "processo_id", "processo_id");
    }
}
