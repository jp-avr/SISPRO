<?php

namespace App\Http\Controllers;

use App\Http\Requests\Processos\Judiciarios\ProcessosInserirRequest;
use App\Models\ProcessoAdministrativo;
use App\Models\ProcessoJudiciario;
use Illuminate\Http\Request;

class ProcessoController extends Controller
{

    public function index()
    {
        $processos_judiciarios = ProcessoJudiciario::all();
        $processos_administrativos = ProcessoAdministrativo::all();
        return view('processos.processosclientes',compact('processos_judiciarios','processos_administrativos'));
    }
    // INSERINDO DADOS EM TABELA
    public function inserir(){
        
        return view('processos.cadastroprocessos');
    }

    public function store(Request $request)
    {   
        
        ProcessoJudiciario::create([
            'clientes_id' => 1,
            'cid_id' => $request->cid_id,
            'proc_judiciarios_numero_proc' => $request->proc_judiciarios_numero_proc,
            'proc_judiciarios_numero_req' => 1,
            'proc_judiciarios_data_exame' => date('Y-m-d'),
            'proc_judiciarios_data_ini_doenca' => $request->proc_judiciarios_data_ini_doenca,
            'proc_judiciarios_nome_perito' => $request->proc_judiciarios_nome_perito,
            'proc_judiciarios_resultado' => 1,
            'proc_judiciarios_historia' => 1,
            'proc_judiciarios_exame_fisico' => 1,
            'proc_judiciarios_consideracoes' => $request->proc_judiciarios_consideracoes,
            'proc_judiciarios_parte_atingida' => $request->proc_judiciarios_parte_atingida,
        ]);

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
