<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessoJudiciario extends Model
{
    protected $table = 'proc_judiciarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'clientes_id',
        'cid_id',
        'proc_judiciarios_numero_proc',
        'proc_judiciarios_numero_req',
        'proc_judiciarios_data_exame',
        'proc_judiciarios_data_ini_doenca',
        'proc_judiciarios_nome_perito',
        'proc_judiciarios_resultado',
        'proc_judiciarios_historia',
        'proc_judiciarios_exame_fisico',
        'proc_judiciarios_consideracoes',
        'proc_judiciarios_data_cadastro',
        'proc_judiciarios_parte_atingida',
        'proc_judiciarios_ativo',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'proc_judiciarios_id';
}
