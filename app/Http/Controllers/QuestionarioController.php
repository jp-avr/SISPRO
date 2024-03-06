<?php

namespace App\Http\Controllers;

use App\Models\Cid;
use App\Models\Cliente;
use App\Models\Questionario;
use Illuminate\Http\Request;

class QuestionarioController extends Controller
{
    public function index()
    {
        
    }

    public function inserir($cliente_id)
    {
        $cliente = Cliente::findOrFail($cliente_id);
        $cids = Cid::all();
        return view('clientes.formulario', compact('cids', 'cliente'));
    }

    public function store(Request $request,$cliente_id){
        Questionario::criar($request, $cliente_id);

        return redirect()->route("processos.index")->with($cliente_id);
    }
}
