<?php

namespace App\Http\Controllers;

use App\Models\Processo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $processos = Processo::all();
        $total_processos = $processos->count();

        $processos_administrativos = Processo::where('tipo_processo_id','=',1);
        $total_processos_administrativos = $processos_administrativos->count();

        $processos_judiciarios = Processo::where('tipo_processo_id','=',2);
        $total_processos_judiciarios = $processos_judiciarios->count();

        $processos_finalizados = Processo::where('proc_finalizado','=',1);
        $total_processos_finalizados = $processos_finalizados->count();

        return view('home', compact('total_processos','total_processos_administrativos','total_processos_judiciarios','total_processos_finalizados','processos'));
    }
}
