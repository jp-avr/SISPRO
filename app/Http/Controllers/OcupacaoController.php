<?php

namespace App\Http\Controllers;

use App\Models\Ocupacao;
use Illuminate\Http\Request;

class OcupacaoController extends Controller
{
    public function index()
    {
        $ocupacoes = Ocupacao::paginate(10);        
        //return view('solicitacoes.ostomia.index', compact('clientes'));
    }

    public function inserir()
    {
        //return view('solicitacoes.ostomia.inserir');
    }
}
