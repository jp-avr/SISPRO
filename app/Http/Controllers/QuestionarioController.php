<?php

namespace App\Http\Controllers;

use App\Models\Cid;
use App\Models\Cliente;
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
}
