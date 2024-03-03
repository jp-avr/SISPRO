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
        'tipo_processo_id',
        // 'cid_id',
        'proc_numero_proc',
        // 'proc_numero_req',
        // 'proc_data_exame',
        'proc_data_ini_doenca',
        'proc_data_ini_incapacidade',
        // 'proc_nome_perito',
        'proc_resultado',
        'proc_historia',
        'proc_exame_fisico',
        'proc_parte_atingida',
        'proc_consideracoes',
        'proc_data_cadastro',
        'proc_ativo',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'processo_id';

    public static function criarAdministrativo($request,$cliente_id)
    {
        $processo = self::create([
            'cliente_id' => $cliente_id,
            'tipo_processo_id' => 1,
            'cid_id' => $request->cid_id,
            'proc_numero_proc' => $request->proc_numero_proc,
            // 'proc_numero_req' => 1,
            // 'proc_data_exame' => date('Y-m-d'),
            'proc_data_ini_doenca' => $request->proc_data_ini_doenca,
            'proc_data_ini_incapacidade' => $request->proc_data_ini_incapacidade,
            // 'proc_nome_perito' => $request->proc_nome_perito,
            'proc_resultado' => 1,
            'proc_historia' => $request->proc_historia,
            'proc_exame_fisico' => 1,
            'proc_consideracoes' => $request->proc_consideracoes,
            'proc_parte_atingida' => $request->proc_parte_atingida,
        ]);
        $processo->cids()->sync($request->cid_id);

        return 1;
    }

    public static function criarJudiciario($request,$cliente_id)
    {
        $processo = self::create([
            'cliente_id' => $cliente_id,
            'tipo_processo_id' => 2,
            'proc_numero_proc' => $request->proc_numero_proc,
            // 'proc_numero_req' => 1,
            // 'proc_data_exame' => date('Y-m-d'),
            'proc_data_ini_doenca' => $request->proc_data_ini_doenca,
            'proc_data_ini_incapacidade' => $request->proc_data_ini_incapacidade,
            // 'proc_nome_perito' => $request->proc_nome_perito,
            'proc_resultado' => 1,
            'proc_historia' => $request->proc_historia,
            'proc_exame_fisico' => 1,
            'proc_consideracoes' => $request->proc_consideracoes,
            'proc_parte_atingida' => $request->proc_parte_atingida,
        ]);

        $processo->cids()->sync($request->cid_id);

        return 1;
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'cliente_id','cliente_id');
    }

    public function tipo_processo(){
        return $this->belongsTo(TipoProcesso::class,'tipo_processo_id','tipo_processo_id');
    }

    public function cids(){
        return $this->belongsToMany(Cid::class,'processo_cids','processo_id', 'cid_id')->using(ProcessoCids::class);
    }
}
