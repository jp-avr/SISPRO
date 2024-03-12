<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\EstadoCivil;
use App\Models\Ocupacao;
use App\Models\Processo;
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
        $processos = $cliente->processos()->get();
        @dd($processos);
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
        $estados_civis = EstadoCivil::all();
        // @dd($cliente);
        return view('clientes.edit', compact('cliente','estados_civis'));
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
