<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Questionario;
use Illuminate\Http\Request;

class QuestionarioController extends Controller
{
    public function index()
    {
        
    }

    public function inserir()
    {
        return view('cards.formulario');
    }

    public function store(Request $request,$cliente_id){
        Questionario::criar($request, $cliente_id);

        return redirect()->route("processos.index");
    }
}
