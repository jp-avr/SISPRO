<?php

namespace App\Http\Controllers;

use App\Models\Processo;
use App\Models\ProcessoAdministrativo;
use Illuminate\Http\Request;

class ProcessoController extends Controller
{
    public function index()
    {
        $processos = Processo::all();
        return view('processos.index',compact('processos'));
    }
    // INSERINDO DADOS EM TABELA
    public function inserir(){
        
        return view('processos.inserir');
    }

    public function store(Request $request)
    {  
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
