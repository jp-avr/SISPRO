<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProcesso extends Model
{
    protected $table = 'tipo_processo';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'proc_judiciarios_id',
        'proc_adm_id',
        'tipo_processo_descricao',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'tipo_processo_id';
}
