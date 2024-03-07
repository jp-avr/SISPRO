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
        // 'estado_civil_id',
        'profissao_id',
        'cbo',
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

    public static function criar($request)
    {
        return self::create([
            // 'ocupacao_id' => 1,
            // 'estado_civil_id' => $request->estado_civil_id,
            'profissao_id' => $request->profissao_id,
            'cbo' => $request->cbo,
            'cliente_nome' => $request->cliente_nome,
            'cliente_cpf' => $request->cliente_cpf,
            'cliente_rg' => $request->cliente_rg,
            'cliente_data_nascimento' => $request->cliente_data_nascimento,
            'cliente_telefone' => $request->cliente_telefone,
            'cliente_email' => $request->cliente_email,
            'cliente_sexo' => $request->cliente_sexo,
            'cliente_ativo' => 1,
        ]);
    }

    public function atualizar($request)
    {
        return self::update([
            'ocupacao_id' => 1,
            'profissao_id' => $request->profissao_id,
            // 'estado_civil_id' => $request->estado_civil_id,
            'cliente_nome' => $request->cliente_nome,
            'cliente_cpf' => $request->cliente_cpf,
            'cliente_rg' => $request->cliente_rg,
            'cliente_data_nascimento' => $request->cliente_data_nascimento,
            'cliente_telefone' => $request->cliente_telefone,
            'cliente_email' => $request->cliente_email,
            'cliente_sexo' => $request->cliente_sexo,
            'cliente_ativo' => 1,
        ]);
    }

    public function processos()
    {
        return $this->hasMany(Processo::class,'processo_id','processo_id');
    }

    public function estadoCivil()
    {
        return $this->belongsTo(EstadoCivil::class, 'estado_civil_id', 'estado_civil_id');
    }

    public function profissao()
    {
        return $this->belongsTo(Profissao::class, 'profissao_id', 'profissao_id');
    }

    // public function ocupacao()
    // {
    //     return $this->belongsTo(Ocupacao::class, 'ocupacao_id', 'ocupacao_id');
    // }
}
