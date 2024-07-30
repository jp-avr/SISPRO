<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profissao extends Model
{
    protected $table = 'profissoes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'profissao_descricao',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'profissao_id';

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'cliente_id', 'cliente_id');
    }
}
