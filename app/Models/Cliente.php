<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ocupacao_id',
        'cliente_nome',
        'cliente_cpf',
        'cliente_rg',
        'cliente_data_nascimento',
        'cliente_telefone',
        'cliente_email',
        'cliente_sexo',
        'cliente_ativo',
        'cliente_estado_civil',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'cliente_id';

    public function processos_administrativos()
    {
        return $this->hasMany(ProcessoAdministrativo::class,'proc_adm_id','proc_adm_id');
    }
}
