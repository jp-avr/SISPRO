<?php

namespace App\Http\Controllers;

use App\Http\Requests\Processos\Administrativos\ProcessoAdministrativoInserirRequest;

class ProcessoAdministrativoController extends Controller
{
    public function index()
    {
        return view('clientes.administrativo.inserir');
    }

    public function inserir()
    {
        return view('clientes.administrativo');
    }

    public function store(ProcessoAdministrativoInserirRequest $request)
    {
        
        return redirect()->route('processo_administrativo.inserir')->with('sucesso', 'solicitacao inserido com sucesso!');
    }

    
}
