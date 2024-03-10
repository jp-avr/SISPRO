<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParteAtingida extends Model
{
    protected $table = 'partes_atingidas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parte_atingida_descricao',
        'parte_atingida_codigo',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'parte_atingida_id';
    
}
