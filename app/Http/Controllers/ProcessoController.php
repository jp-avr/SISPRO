<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcessoAdministrativoInserirRequest;
use App\Models\Cid;
use App\Models\Cliente;
use App\Models\EstadoCivil;
use App\Models\Processo;
use Illuminate\Http\Request;

class ProcessoController extends Controller
{
    public function index()
    {
        $processos = Processo::all();
        $clientes = Cliente::all();
        $estados_civis = EstadoCivil::all();
        return view('processos.index',compact('processos', 'clientes', 'estados_civis'));
    }
    // INSERINDO DADOS EM TABELA
    public function inserir_administrativo()
    {
        $cids = Cid::all();
        $estados_civis = EstadoCivil::all();
        return view('processos.administrativo.inserir', compact('estados_civis','cids'));
    }

    public function inserir_judiciario()
    {
        $cids = Cid::all();
        $estados_civis = EstadoCivil::all();
        return view('processos.judiciario.inserir', compact('estados_civis','cids'));
    }

    public function store_administrativo(ProcessoAdministrativoInserirRequest $request)
    {  
        $cliente = Cliente::criar($request);

        Processo::criar($request, $cliente);

        // dd($request->all());

        return redirect()->route('processos')->with('sucesso', 'solicitacao inserido com sucesso!');
    }

    public function store_judiciario(ProcessoAdministrativoInserirRequest $request)
    {  
        $cliente = Cliente::criar($request);

        Processo::criar($request, $cliente);

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
