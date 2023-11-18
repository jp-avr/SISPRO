<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'ocupacao_ativo',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'ocupacao_id';
}
