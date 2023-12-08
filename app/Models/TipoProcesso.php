<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoProcesso extends Model
{
    protected $table = "tipo_processos";

    protected $primaryKey = "tipo_processo_id";

    protected $fillable = [
        "tipo_processo_descricao",
    ];
}
