<?php

namespace App;

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

    public function cliente(){
        return $this->belongsTo(Cliente::class, "cliente_id", "cliente_id");
    }
}
