<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ocupacao extends Model
{
    protected $table = 'ocupacoes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ocupacao_nome',
        'ocupacao_codigo',
        'ocupacao_ativo'
    ];

    protected $primaryKey = 'ocupacao_id';

    public function clientes()
    {
        return $this->hasMany(Cliente::class,'cliente_id','cliente_id');
    }
}
