<?php

namespace App\Http\Controllers;

use App\Http\Requests\FibromialgiaInserirRequest;
use App\Http\Requests\ProcessoAdministrativoInserirRequest;
use App\Models\Cliente;
use App\Models\Processo;
use App\Models\ProcessoAdministrativo;
use Illuminate\Http\Request;

class ProcessoAdministrativoController extends Controller
{
    public function index()
    {
        // return view('processos.index');
    }
    // INSERINDO DADOS EM TABELA
    public function inserir(){
        
        return view('processos.administrativo.inserir');
    }

    public function store(ProcessoAdministrativoInserirRequest $request)
    {  
        $cliente = Cliente::create([
            'ocupacao_id' => 1,
            'cliente_nome' => $request->cliente_nome,
            'cliente_cpf' => $request->cliente_cpf,
            'cliente_rg' => $request->cliente_rg,
            'cliente_data_nascimento' => $request->cliente_data_nascimento,
            'cliente_telefone' => $request->cliente_telefone,
            'cliente_email' => $request->cliente_email,
            'cliente_sexo' => $request->cliente_sexo,
            'cliente_ativo' => 1,
            'cliente_estado_civil' => $request->cliente_estado_civil,
        ]);

        $adm = ProcessoAdministrativo::create([
            'proc_adm_cid' => $request->proc_adm_cid,
            'proc_adm_numero_proc' => $request->proc_adm_numero_proc,
            // 'proc_adm_numero_req' => 1,
            // 'proc_adm_data_exame' => date('Y-m-d'),
            'proc_adm_data_ini_doenca' => $request->proc_adm_data_ini_doenca,
            'proc_adm_data_ini_incapacidade' => $request->proc_adm_data_ini_incapacidade,
            'proc_adm_nome_perito' => $request->proc_adm_nome_perito,
            'proc_adm_resultado' => 1,
            'proc_adm_historia' => $request->proc_adm_historia,
            'proc_adm_exame_fisico' => 1,
            'proc_adm_consideracoes' => $request->proc_adm_consideracoes,
            'proc_adm_parte_atingida' => $request->proc_adm_parte_atingida,
        ]);

        Processo::create([
            'cliente_id' => $cliente->cliente_id,
            'proc_adm_id' => $adm->proc_adm_id
        ]);

        // dd($request->all());

        return redirect()->route('processos')->with('sucesso', 'solicitacao inserido com sucesso!');
    }

    // EDITANDO DADOS EM TABELA
    public function edit($solicitacao)
    {        
        //return view('solicitacoes.cateterismo.edit', compact('solicitacao'));
    }

    public function update($solicitacao, Request $request)
    {
        //return redirect()->route('solicitacoes.cateterismo.index')->with('sucesso', 'solicitacao alterado com sucesso!');
    }
}
