<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoCliente extends Model
{

    protected $table = 'doc_clientes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'clientes_id',
        'doc_clientes_nome',
        'doc_clientes_data_cadastro',
        'doc_clientes_ativo',
        'doc_clientes_documento',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'doc_clientes_id';
}
