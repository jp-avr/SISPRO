<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Doc_clientes;
use Illuminate\Http\Request;

class DocClientesController extends Controller
{
    public function index()
    {
        $doc_clientes = Doc_clientes::paginate(10);        
        //return view('solicitacoes.ostomia.index', compact('clientes'));
    }

    public function inserir()
    {
        $clientes = Clientes::paginate(10);
        //return view('solicitacoes.ostomia.inserir');
    }
}
