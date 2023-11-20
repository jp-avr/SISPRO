<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {  

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
