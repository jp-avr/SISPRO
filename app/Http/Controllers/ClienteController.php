<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Processo;
use App\Models\Profissao;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::paginate(10);
        $processos = Processo::all();
        return view('clientes.index',compact('clientes','processos'));
    }

    public function processos($cliente_id)
    {
        $clientes = Cliente::all();
        $cliente = Cliente::findOrFail($cliente_id);
        $processos = Processo::where('cliente_id','=',$cliente_id)->get();
        return view('clientes.info_processos', compact('cliente','processos','clientes'));
    }

    public function create()
    {
        return view('clientes.insert');
    }


    public function store(Request $request)
    {
        Cliente::criar($request);
        return redirect()->route('clientes.index');
    }

    public function show($cliente_id)
    {
        $cliente = Cliente::findOrFail($cliente_id);
        return view('clientes.show', compact('cliente'));
    }

    public function edit($cliente_id)
    {
        $cliente = Cliente::findOrFail($cliente_id);
        $profissoes = Profissao::all();
        return view('clientes.edit', compact('cliente','profissoes'));
    }


    public function update(Request $request, $cliente_id)
    {
        $cliente = Cliente::findOrFail($cliente_id);
        $cliente->atualizar($request);
        return redirect()->route('clientes.index');
    }

    public function destroy($cliente_id)
    {
        $cliente = Cliente::findOrFail($cliente_id);
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
