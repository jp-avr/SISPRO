<?php

namespace App\Http\Controllers;

use App\Http\Requests\Clientes\ClienteInserirRequest;
use App\Http\Requests\Processos\Administrativos\ProcessoAdministrativoInserirRequest;
use App\Http\Requests\Processos\Judiciarios\ProcessoJudiciarioInserirRequest;
use App\Http\Requests\Processos\Judiciarios\ProcessosInserirRequest;
use App\Models\Cliente;
use App\Models\ProcessoAdministrativo;
use App\Models\ProcessoJudiciario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index',compact('clientes'));
    }
    // INSERINDO DADOS EM TABELA
    public function inserirJudiciario(){
        
        return view('clientes.judiciario.inserir');
    }

    public function inserirAdministrativo(){

        return view('clientes.administrativo.inserir');
    }

    public function store_administrativo(ProcessoAdministrativoInserirRequest $request)
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

        ProcessoAdministrativo::create([
            'cliente_id' => $cliente->cliente_id,
            'cid_id' => $request->cid_id,
            'proc_adm_numero_proc' => $request->proc_adm_numero_proc,
            'proc_adm_numero_req' => 1,
            'proc_adm_data_exame' => date('Y-m-d'),
            'proc_adm_data_ini_doenca' => $request->proc_adm_data_ini_doenca,
            'proc_adm_data_ini_incapacidade' => $request->proc_adm_data_ini_incapacidade,
            'proc_adm_nome_perito' => $request->proc_adm_nome_perito,
            'proc_adm_resultado' => 1,
            'proc_adm_historia' => $request->proc_adm_historia,
            'proc_adm_exame_fisico' => 1,
            'proc_adm_consideracoes' => $request->proc_adm_consideracoes,
            'proc_adm_parte_atingida' => $request->proc_adm_parte_atingida,
        ]);

        return redirect()->route('clientes.index')->with('sucesso', 'solicitacao inserido com sucesso!');
    }

    public function store_judiciario(ProcessoJudiciarioInserirRequest $request)
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

        ProcessoJudiciario::create([
            'cliente_id' => $cliente->cliente_id,
            'cid_id' => $request->cid_id,
            'proc_judiciario_numero_proc' => $request->proc_adm_numero_proc,
            'proc_judiciario_numero_req' => 1,
            'proc_judiciario_data_exame' => date('Y-m-d'),
            'proc_judiciario_data_ini_doenca' => $request->proc_adm_data_ini_doenca,
            'proc_judiciario_data_ini_incapacidade' => $request->proc_adm_data_ini_incapacidade,
            'proc_judiciario_nome_perito' => $request->proc_adm_nome_perito,
            'proc_judiciario_resultado' => 1,
            'proc_judiciario_historia' => $request->proc_adm_historia,
            'proc_judiciario_exame_fisico' => 1,
            'proc_judiciario_consideracoes' => $request->proc_adm_consideracoes,
            'proc_judiciario_parte_atingida' => $request->proc_adm_parte_atingida,
        ]);
        return redirect()->route('clientes.index')->with('sucesso', 'solicitacao inserido com sucesso!');
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
