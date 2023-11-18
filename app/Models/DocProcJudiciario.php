<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocProcJudiciario extends Model
{

    protected $table = 'doc_proc_judiciarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'clientes_id',
        'proc_judiciarios_id',
        'doc_proc_judiciarios_nome',
        'doc_proc_judiciarios_data_cadastro',
        'doc_proc_judiciarios_ativo',
        'doc_proc_judiciarios_documento',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'doc_proc_judiciarios_id';
}
