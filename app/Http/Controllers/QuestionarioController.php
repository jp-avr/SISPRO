<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormularioRequest;
use App\Models\Cid;
use App\Models\Cliente;
use App\Models\Processo;
use App\Models\Questionario;
use App\Models\RespostasQuestionario;
use Illuminate\Http\Request;

class QuestionarioController extends Controller
{
    public function resultado($questionario_id)
    {
        $questionario = Questionario::findOrFail($questionario_id);
        $respostas = $questionario->respostas;

        // Certifica-se de que cada seção é um array válido
        for ($i = 1; $i <= 10; $i++) {
            $secaoKey = 'secao_' . $i;
            if (isset($respostas->{$secaoKey})) {
                $respostas->{$secaoKey} = json_decode($respostas->{$secaoKey}, true);
            } else {
                $respostas->{$secaoKey} = []; // Garante que seja um array vazio se não existir
            }
        }

        $answers = [
            'secao_1' => $this->getSection1Response($respostas->secao_1),
            'secao_2' => $this->getSection2Response($respostas->secao_2),
            'secao_3' => $this->getSection3Response($respostas->secao_3),
            'secao_4' => $this->getSection4Response($respostas->secao_4),
            'secao_5' => $this->getSection5Response($respostas->secao_5),
            'secao_6' => $this->getSection6Response($respostas->secao_6),
            'secao_7' => $this->getSection7Response($respostas->secao_7),
            'secao_8' => $this->getSection8Response($respostas->secao_8),
            'secao_9' => $this->getSection9Response($respostas->secao_9),
            'secao_10' => $this->getSection10Response($respostas->secao_10),
        ];

        $questions = [
            'secao_1' => 'Seção 1: Intensidade da dor',
            'secao_2' => 'Seção 2: Cuidados pessoais (Vestir-se, tomar banho etc)',
            'secao_3' => 'Seção 3: Pesos',
            'secao_4' => 'Seção 4: Andar',
            'secao_5' => 'Seção 5: Sentar',
            'secao_6' => 'Seção 6: De pé',
            'secao_7' => 'Seção 7: Sono',
            'secao_8' => 'Seção 8: Vida sexual (se aplicável)',
            'secao_9' => 'Seção 9: Vida social',
            'secao_10' => 'Seção 10: Viagens'
        ];

        return view('questionario.resultado', compact('questionario', 'respostas','answers','questions'));
    }


    public function inserir($processo_id, Request $request)
    {
        $processo = Processo::findOrFail($processo_id);
        $cids = Cid::all();
        $pos_operatorio = $request->input('pos_operatorio');
        return view('clientes.formulario', compact('cids', 'processo','pos_operatorio'));
    }

    public function store(FormularioRequest $request,$processo_id,$pos_operatorio){
        $questionario = Questionario::criar($request, $processo_id, $pos_operatorio);
        RespostasQuestionario::criar($questionario->questionario_id, $request);

        return redirect()->route("processos.questionarios", $processo_id);
    }

    public function destroy($questionario_id)
    {
        $questionario = Questionario::findOrFail($questionario_id);

        $questionario->delete();

        return redirect()->route('processos.questionarios', $questionario->questionario_id);
    }

    private function getSection1Response($value)
    {
        $options = [
            'Sem dor no momento',
            'A dor é leve nesse momento',
            'A dor é moderada nesse momento',
            'A dor é mais ou menos intensa nesse momento',
            'A dor é muito forte nesse momento',
            'A dor é a pior imaginável nesse momento'
        ];
        return $options[$value];
    }

    private function getSection2Response($value)
    {
        $options = [
            'Eu posso cuidar de mim sem provocar dor extra',
            'Posso me cuidar mas me causa dor',
            'É doloroso me cuidar e sou lento e cuidadoso',
            'Preciso de alguma ajuda, mas dou conta de me cuidar',
            'Preciso de ajuda em todos os aspectos para cuidar de mim',
            'Eu não me visto, tomo banho com dificuldade e fico na cama'
        ];
        return $options[$value];
    }

    private function getSection3Response($value)
    {
        $options = [
            'Posso levantar coisas pesadas sem causar dor extra',
            'Se levantar coisas pesadas sinto dor extra',
            'A dor me impede de levantar coisas pesadas, mas dou um jeito, se estão bem posicionadas, e.g., numa mesa',
            'A dor me impede de levantar coisas pesadas mas dou um jeito de levantar coisas leves ou pouco pesadas se estiverem bem posicionadas',
            'Só posso levantar coisas muito leves',
            'Não posso levantar nem carregar nada'
        ];
        return $options[$value];
    }

    private function getSection4Response($value)
    {
        $options = [
            'A dor não me impede de andar (qualquer distância)',
            'A dor me impede de andar mais que 2 Km',
            'A dor me impede de andar mais que 1 Km',
            'A dor me impede de andar mais que poucos metros',
            'Só posso andar com bengala ou muleta',
            'Fico na cama a maior parte do tempo e tenho que me arrastar para o banheiro'
        ];
        return $options[$value];
    }

    private function getSection5Response($value)
    {
        $options = [
            'Posso sentar em qualquer tipo de cadeira pelo tempo que quiser',
            'Posso sentar em minha cadeira favorita pelo tempo que quiser',
            'A dor me impede de sentar por mais de 1 hora',
            'A dor me impede de sentar por mais de 30 minutos',
            'A dor me impede de sentar por mais que 10 minutos',
            'A dor me impede de sentar'
        ];
        return $options[$value];
    }

    private function getSection6Response($value)
    {
        $options = [
            'Posso ficar de pé pelo tempo que quiser sem dor extra',
            'Posso ficar de pé pelo tempo que quiser, mas sinto um pouco de dor',
            'A dor me impede de ficar de pé por mais de 1 hora',
            'A dor me impede de ficar de pé por mais de 30 minutos',
            'A dor me impede de ficar de pé por mais de 10 minutos',
            'A dor me impede de ficar de pé'
        ];
        return $options[$value];
    }

    private function getSection7Response($value)
    {
        $options = [
            'Meu sono não é perturbado por dor',
            'Algumas vezes meu sono é perturbado por dor',
            'Por causa da dor durmo menos de 6 horas',
            'Por causa da dor durmo menos de 4 horas',
            'Por causa da dor durmo menos de 2 horas',
            'A dor me impede de dormir'
        ];
        return $options[$value];
    }

    private function getSection8Response($value)
    {
        $options = [
            'Minha vida sexual é normal e não me causa dor extra',
            'Minha vida sexual é normal, mas me causa dor extra',
            'Minha vida sexual é quase normal, mas é muito dolorosa',
            'Minha vida sexual é muito restringida devido à dor',
            'Minha vida sexual é praticamente inexistente devido à dor',
            'A dor me impede de ter atividade sexual'
        ];
        return $options[$value];
    }

    private function getSection9Response($value)
    {
        $options = [
            'Minha vida social é normal e eu não sinto dor extra',
            'Minha vida social é normal, mas aumenta o grau de minha dor',
            'A dor não altera minha vida social, exceto por impedir que faça atividades de esforço, como esportes, etc',
            'A dor restringiu minha vida social e eu não saio muito de casa',
            'A dor restringiu minha vida social a minha casa',
            'Não tenho vida social devido a minha dor'
        ];
        return $options[$value];
    }

    private function getSection10Response($value)
    {
        $options = [
            'Posso viajar para qualquer lugar sem dor',
            'Posso viajar para qualquer lugar, mas sinto dor extra',
            'A dor é ruim, mas posso viajar por 2 horas',
            'A dor restringe minhas viagens para distâncias menores que 1 hora',
            'A dor restringe minhas viagens para as necessárias e menores de 30 minutos',
            'A dor me impede de viajar, exceto para ser tratado'
        ];
        return $options[$value];
    }
}
