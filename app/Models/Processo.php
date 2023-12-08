<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $table = 'proc_adm';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente_id',
        'tipo_processo_id',
        'cid_id',
        'proc_numero_proc',
        // 'proc_numero_req',
        // 'proc_data_exame',
        'proc_data_ini_doenca',
        'proc_data_ini_incapacidade',
        'proc_nome_perito',
        'proc_resultado',
        'proc_historia',
        'proc_exame_fisico',
        'proc_parte_atingida',
        'proc_consideracoes',
        'proc_data_cadastro',
        'proc_ativo',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'processo_id';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'cliente_id','cliente_id');
    }

    public function tipo_processo(){
        return $this->belongsTo(TipoProcesso::class,'tipo_processo_id','tipo_processo_id');
    }

    public function cid(){
        return $this->hasOne(Cid::class,'cid_id','cid_id');
    }
}
