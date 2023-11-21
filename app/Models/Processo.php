<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $table = 'processos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente_id',
        'proc_jud_id',
        'proc_adm_id',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'processo_id';

    public function administrativo()
    {
        return $this->belongsTo(ProcessoAdministrativo::class,'proc_adm_id','proc_adm_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'cliente_id','cliente_id');
    }

    // public function judiciario()
    // {
    //     return $this->belongsTo(ProcessoAdministrativo::class,'proc_adm_id','proc_adm_id');
    // }
}
