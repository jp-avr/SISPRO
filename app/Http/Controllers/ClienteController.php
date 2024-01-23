<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index',compact('clientes'));
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
        return view('clientes.edit', compact('cliente'));
    }


    public function update(Request $request, $cliente_id)
    {
        $cliente = Cliente::findOrFail($cliente_id);
        $cliente->atualizar($request);
        return view('clientes.show', compact('cliente'));
    }

    public function destroy($cliente_id)
    {
        $cliente = Cliente::findOrFail($cliente_id);
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
