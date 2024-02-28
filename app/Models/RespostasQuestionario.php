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

    public function questionario(){
        return $this->belongsTo(Questionario::class, "questionario_id", "questionario_id");
    }
}
