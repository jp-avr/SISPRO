<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    protected $table = 'estados_civis';

    protected $fillable = [
        'estado_civil_nome',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'estado_civil_id';

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'cliente_id', 'cliente_id');
    }
}
