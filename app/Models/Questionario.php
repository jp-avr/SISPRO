<?php

namespace App\Models;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    protected $table = "questionarios";

    protected $primaryKey = "questionario_id";

    protected $fillable = [
        "cliente_id",
        "questionario_data",
        "questionario_resultado",
        "questionario_porcentagem",
    ];

    public static function criar($request, $cliente_id){
        $resultado = "Teste";

        $questionario = self::create([
            "cliente_id" => $cliente_id,
            "questionario_data" => now(),
            "questionario_resultado" => $resultado,
            "questionario_porcentagem" => 5,
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

    public function cliente(){
        return $this->belongsTo(Cliente::class, "cliente_id", "cliente_id");
    }
}
