<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcessoInserirRequest;
use App\Models\Cid;
use App\Models\Cliente;
use App\Models\EstadoCivil;
use App\Models\ParteAtingida;
use App\Models\Processo;
use App\Models\Profissao;
use App\Models\Questionario;
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

    public function questionario($processo_id)
    {
        $questionarios = Questionario::where('processo_id','=',$processo_id)->get();
        // $processos = Processo::where('cliente_id','=',$cliente_id)->get();
        $processo = Processo::findOrFail($processo_id);
        return view('processos.info_processos', compact('processo','questionarios'));
    }
    // INSERINDO DADOS EM TABELA
    public function inserir_administrativo()
    {
        $cids = Cid::all();
        $clientes = Cliente::all();
        $profissoes = Profissao::all();
        $partes_atingidas = ParteAtingida::all();
        return view('processos.administrativo.inserir', compact('partes_atingidas','cids','clientes','profissoes'));
    }

    public function inserir_judiciario()
    {
        $cids = Cid::all();
        $estados_civis = EstadoCivil::all();
        $profissoes = Profissao::all();
        $partes_atingidas = ParteAtingida::all();
        return view('processos.judiciario.inserir', compact('estados_civis','cids','profissoes','partes_atingidas'));
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
