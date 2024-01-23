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
        'estado_civil_id',
        'cliente_nome',
        'cliente_cpf',
        'cliente_rg',
        'cliente_data_nascimento',
        'cliente_telefone',
        'cliente_email',
        'cliente_sexo',
        'cliente_ativo',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'cliente_id';

    public function processos()
    {
        return $this->hasMany(Processo::class,'processo_id','processo_id');
    }

    public function estadoCivil()
    {
        return $this->belongsTo(EstadoCivil::class, 'estado_civil_id', 'estado_civil_id');
    }
}
