<?php

namespace App\Http\Controllers;

use App\Models\Cid;
use Illuminate\Http\Request;

class CidController extends Controller
{
    
    public function index()
    {
        $cid = Cid::paginate(10);
        //return view('solicitacoes.ostomia.index', compact('cid'));
    }

    public function inserir()
    {        
        //return view('solicitacoes.ostomia.inserir');
    }
}
