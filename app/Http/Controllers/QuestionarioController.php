<?php

namespace App\Http\Controllers;

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
}
