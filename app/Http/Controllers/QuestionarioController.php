<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormularioRequest;
use App\Models\Cid;
use App\Models\Cliente;
use App\Models\Questionario;
use Illuminate\Http\Request;

class QuestionarioController extends Controller
{
    public function index()
    {
        
    }

    public function inserir($cliente_id, Request $request)
    {
        $cliente = Cliente::findOrFail($cliente_id);
        $cids = Cid::all();
        $pos_operatorio = $request->input('pos_operatorio');
        return view('clientes.formulario', compact('cids', 'cliente','pos_operatorio'));
    }

    public function store(FormularioRequest $request,$processo_id,$pos_operatorio){
        Questionario::criar($request, $processo_id, $pos_operatorio);

        return redirect()->route("processos.index")->with($processo_id);
    }

    public function destroy($questionario_id)
    {
        $questionario = Questionario::findOrFail($questionario_id);

        $questionario->delete();

        return redirect()->route('processos.questionarios', $questionario->questionario_id);

    }
}
