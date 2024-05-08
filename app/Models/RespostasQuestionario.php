<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespostasQuestionario extends Model
{
    protected $table = "respostas_questionarios";

    protected $primaryKey = "respostas_id";

    protected $fillable = [
        'questionario_id',
        'secao_1',
        'secao_2',
        'secao_3',
        'secao_4',
        'secao_5',
        'secao_6',
        'secao_7',
        'secao_8',
        'secao_9',
        'secao_10',
    ];

    public static function criar($questionario_id,$request){

        $respostas = RespostasQuestionario::create([
            "questionario_id" => $questionario_id,
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

        dd($respostas);

        return $respostas;
    }

    public function questionario(){
        return $this->belongsTo(Questionario::class, "questionario_id", "questionario_id");
    }
}
