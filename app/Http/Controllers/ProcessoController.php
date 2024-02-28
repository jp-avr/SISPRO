<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcessoInserirRequest;
use App\Models\Cid;
use App\Models\Cliente;
use App\Models\EstadoCivil;
use App\Models\Processo;
use App\Models\Profissao;
use Illuminate\Http\Request;

class ProcessoController extends Controller
{
    public function index()
    {
        $processos = Processo::all();
        $clientes = Cliente::all();
        $estados_civis = EstadoCivil::all();
        $profissoes = Profissao::all();
        return view('processos.index',compact('processos', 'clientes', 'estados_civis','profissoes'));
    }
    // INSERINDO DADOS EM TABELA
    public function inserir_administrativo()
    {
        $cids = Cid::all();
        $estados_civis = EstadoCivil::all();
        $clientes = Cliente::all();
        $profissoes = Profissao::all();
        return view('processos.administrativo.inserir', compact('estados_civis','cids','clientes','profissoes'));
    }

    public function inserir_judiciario()
    {
        $cids = Cid::all();
        $estados_civis = EstadoCivil::all();
        $profissoes = Profissao::all();
        return view('processos.judiciario.inserir', compact('estados_civis','cids','profissoes'));
    }

    public function store_administrativo(ProcessoInserirRequest $request)
    {  
        $cliente = Cliente::criar($request);

        Processo::criarAdministrativo($request, $cliente->cliente_id);

        // dd($request->all());

        return redirect()->route('processos.index')->with('sucesso', 'solicitacao inserido com sucesso!');
    }

    public function store_judiciario(ProcessoInserirRequest $request)
    {  
        $cliente = Cliente::criar($request);

        Processo::criarJudiciario($request, $cliente->cliente_id);

        // dd($request->all());

        return redirect()->route('processos.index')->with('sucesso', 'solicitacao inserido com sucesso!');
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
