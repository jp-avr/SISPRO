<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Processojud extends Model
{
    protected $table = 'proc_jud';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente_id',
        'cid_id',
        'proc_jud_numero_proc',
        // 'proc_jud_numero_req',
        // 'proc_jud_data_exame',
        'proc_jud_data_ini_doenca',
        'proc_jud_nome_perito',
        'proc_jud_resultado',
        'proc_jud_historia',
        'proc_jud_exame_fisico',
        'proc_jud_consideracoes',
        'proc_jud_data_cadastro',
        'proc_jud_parte_atingida',
        'proc_jud_ativo',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'proc_jud_id';
}
