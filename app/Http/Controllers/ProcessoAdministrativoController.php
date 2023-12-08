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
        $processos = Processo::all();
        return view('processos.administrativo.index',compact('processos'));
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

        $adm = Processo::create([
            'cliente_id' => $cliente->id,
            'proc_cid' => $request->proc_cid,
            'proc_numero_proc' => $request->proc_numero_proc,
            // 'proc_numero_req' => 1,
            // 'proc_data_exame' => date('Y-m-d'),
            'proc_data_ini_doenca' => $request->proc_data_ini_doenca,
            'proc_data_ini_incapacidade' => $request->proc_data_ini_incapacidade,
            'proc_nome_perito' => $request->proc_nome_perito,
            'proc_resultado' => 1,
            'proc_historia' => $request->proc_historia,
            'proc_exame_fisico' => 1,
            'proc_consideracoes' => $request->proc_consideracoes,
            'proc_parte_atingida' => $request->proc_parte_atingida,
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
