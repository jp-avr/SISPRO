<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcessoAdministrativo extends Model
{
    protected $table = 'proc_adm';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente_id',
        'proc_adm_cid',
        'proc_adm_numero_proc',
        // 'proc_adm_numero_req',
        // 'proc_adm_data_exame',
        'proc_adm_data_ini_doenca',
        'proc_adm_data_ini_incapacidade',
        'proc_adm_nome_perito',
        'proc_adm_resultado',
        'proc_adm_historia',
        'proc_adm_exame_fisico',
        'proc_adm_parte_atingida',
        'proc_adm_consideracoes',
        'proc_adm_data_cadastro',
        'proc_adm_ativo',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'proc_adm_id';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'cliente_id','cliente_id');
    }
}
