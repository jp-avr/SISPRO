<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocProcAdministrativo extends Model
{

    protected $table = 'doc_proc_administrativos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'clientes_id',
        'proc_adm_id',
        'doc_proc_adm_nome',
        'doc_proc_adm_data_cadastro',
        'doc_proc_adm_ativo',
        'doc_proc_adm_documento',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'doc_proc_adm_id';
}
