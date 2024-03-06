    <style>
        .caixa {
            max-width: 800px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #007bff;
        }
        p {
            margin-bottom: 20px;
        }
        section {
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
    </style>
    @if ($errors->any())
    <div class="alert alert-danger m-3">Erro! :(
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="caixa">
    <h1>Índice Oswestry 2.0 de Incapacidade</h1>
    <p>
        Por favor, você poderia completar este questionário? Ele é elaborado para nos dar informações de como seu problema nas costas (ou pernas) têm afetado seu dia-a-dia.
        <br>
        Por favor, responda a todas as seções. Marque apenas uma opção em cada seção, aquele que mais de perto descreve você hoje.
    </p>
    
    <section>
        <h2>Seção 1: Intensidade da dor</h2>
        <input type="radio" id="no_pain" name="secao_1" value="0" {{ old('secao_1') == '0' ? 'checked' : '' }}>Sem dor no momento<br>
        
        <input type="radio" id="mild_pain" name="secao_1" value="1" {{ old('secao_1') == '1' ? 'checked' : '' }}>A dor é leve nesse momento<br>
        
        <input type="radio" id="moderate_pain" name="secao_1" value="2" {{ old('secao_1') == '2' ? 'checked' : '' }}>A dor é moderada nesse momento<br>
        
        <input type="radio" id="moderately_severe_pain" name="secao_1" value="3" {{ old('secao_1') == '3' ? 'checked' : '' }}>A dor é mais ou menos intensa nesse momento<br>
        
        <input type="radio" id="severe_pain" name="secao_1" value="4" {{ old('secao_1') == '4' ? 'checked' : '' }}>A dor é muito forte nesse momento<br>
        
        <input type="radio" id="worst_pain_imaginable" name="secao_1" value="5" {{ old('secao_1') == '5' ? 'checked' : '' }}>A dor é a pior imaginável nesse momento<br>
    </section>

    <section>
        <h2>Seção 2: Cuidados pessoais (Vestir-se, tomar banho etc)</h2>
        <input type="radio" id="no_pain_2" name="secao_2" value="0" {{ old('secao_2') == '0' ? 'checked' : '' }}>Sem dor no momento<br>
        
        <input type="radio" id="mild_pain_2" name="secao_2" value="1" {{ old('secao_2') == '1' ? 'checked' : '' }}>A dor é leve nesse momento<br>
        
        <input type="radio" id="moderate_pain_2" name="secao_2" value="2" {{ old('secao_2') == '2' ? 'checked' : '' }}>A dor é moderada nesse momento<br>
        
        <input type="radio" id="moderately_severe_pain_2" name="secao_2" value="3" {{ old('secao_2') == '3' ? 'checked' : '' }}>A dor é mais ou menos intensa nesse momento<br>
        
        <input type="radio" id="severe_pain_2" name="secao_2" value="4" {{ old('secao_2') == '4' ? 'checked' : '' }}>A dor é muito forte nesse momento<br>
        
        <input type="radio" id="worst_pain_imaginable_2" name="secao_2" value="5" {{ old('secao_2') == '5' ? 'checked' : '' }}>A dor é a pior imaginável nesse momento<br>
    </section>
    
    <section>
        <h2>Seção 3: Pesos</h2>
        <input type="radio" id="no_pain_3" name="secao_3" value="0" {{ old('secao_3') == '0' ? 'checked' : '' }}>Posso levantar coisas pesadas sem causar dor extra<br>
        
        <input type="radio" id="mild_pain_3" name="secao_3" value="1" {{ old('secao_3') == '1' ? 'checked' : '' }}>Se levantar coisas pesadas sinto dor extra<br>
        
        <input type="radio" id="moderate_pain_3" name="secao_3" value="2" {{ old('secao_3') == '2' ? 'checked' : '' }}>A dor me impede de levantar coisas pesadas, mas dou um jeito, se estão bem posicionadas, e.g., numa mesa<br>
        
        <input type="radio" id="moderately_severe_pain_3" name="secao_3" value="3" {{ old('secao_3') == '3' ? 'checked' : '' }}>A dor me impede de levantar coisas pesadas mas dou um jeito de levantar coisas leves ou pouco pesadas se estiverem bem posicionadas.<br>
        
        <input type="radio" id="severe_pain_3" name="secao_3" value="4" {{ old('secao_3') == '4' ? 'checked' : '' }}>Só posso levantar coisas muito leve <br>
        
        <input type="radio" id="worst_pain_imaginable_3" name="secao_3" value="5" {{ old('secao_3') == '5' ? 'checked' : '' }}>Não posso levantar nem carregar nada.<br>
    </section>
    
    <section>
        <h2>Seção 4: Andar</h2>
        <input type="radio" id="no_pain_4" name="secao_4" value="0" {{ old('secao_4') == '0' ? 'checked' : '' }}>A dor não me impede de andar (qualquer distância)<br>
        
        <input type="radio" id="mild_pain_4" name="secao_4" value="1" {{ old('secao_4') == '1' ? 'checked' : '' }}>A dor me impede de andar mais que 2 Km<br>
        
        <input type="radio" id="moderate_pain_4" name="secao_4" value="2" {{ old('secao_4') == '2' ? 'checked' : '' }}>A dor me impede de andar mais que ? Km<br>
        
        <input type="radio" id="moderately_severe_pain_4" name="secao_4" value="3" {{ old('secao_4') == '3' ? 'checked' : '' }}>A dor me impede de andar mais que poucos metros<br>
        
        <input type="radio" id="severe_pain_4" name="secao_4" value="4" {{ old('secao_4') == '4' ? 'checked' : '' }}>Só posso andar com bengala ou muleta<br>
        
        <input type="radio" id="worst_pain_imaginable_4" name="secao_4" value="5" {{ old('secao_4') == '5' ? 'checked' : '' }}>Fico na cama a maior parte do tempo e tenho que arrastar para o banheiro<br>
    </section>
    
    
    <section>
        <h2>Seção 5: Sentar</h2>
        <input type="radio" id="no_pain_5" name="secao_5" value="0" {{ old('secao_5') == '0' ? 'checked' : '' }}>Posso sentar em qualquer tipo de cadeira pelo tempo que quiser<br>
        
        <input type="radio" id="mild_pain_5" name="secao_5" value="1" {{ old('secao_5') == '1' ? 'checked' : '' }}>Posso sentar em minha cadeira favorita pelo tempo que quiser <br>
        
        <input type="radio" id="moderate_pain_5" name="secao_5" value="2" {{ old('secao_5') == '2' ? 'checked' : '' }}>A dor me impede de sentar por mais de 1 hora <br>
        
        <input type="radio" id="moderately_severe_pain_5" name="secao_5" value="3" {{ old('secao_5') == '3' ? 'checked' : '' }}>A dor me impede de sentar por mais de ? hora<br>
        
        <input type="radio" id="severe_pain_5" name="secao_5" value="4" {{ old('secao_5') == '4' ? 'checked' : '' }}>A dor me impede de sentar por mais que 10 minutos <br>
        
        <input type="radio" id="worst_pain_imaginable_5" name="secao_5" value="5" {{ old('secao_5') == '5' ? 'checked' : '' }}>A dor me impede de sentar<br>
    </section>
    
    
    <section>
        <h2>Seção 6: De pé</h2>
        <input type="radio" id="no_pain_6" name="secao_6" value="0" {{ old('secao_6') == '0' ? 'checked' : '' }}>Posso ficar em pé sem dor<br>
        
        <input type="radio" id="mild_pain_6" name="secao_6" value="1" {{ old('secao_6') == '1' ? 'checked' : '' }}>Posso ficar em pé, mas sinto dor leve<br>
        
        <input type="radio" id="moderate_pain_6" name="secao_6" value="2" {{ old('secao_6') == '2' ? 'checked' : '' }}>A dor é moderada, mas consigo ficar em pé<br>
        
        <input type="radio" id="moderately_severe_pain_6" name="secao_6" value="3" {{ old('secao_6') == '3' ? 'checked' : '' }}>A dor é intensa e me limita a ficar em pé por um curto período de tempo<br>
        
        <input type="radio" id="severe_pain_6" name="secao_6" value="4" {{ old('secao_6') == '4' ? 'checked' : '' }}>A dor é muito forte e só consigo ficar em pé com ajuda<br>
        
        <input type="radio" id="worst_pain_imaginable_6" name="secao_6" value="5" {{ old('secao_6') == '5' ? 'checked' : '' }}>Não consigo ficar em pé devido à dor<br>
    </section>
    
    
    <section>
        <h2>Seção 7: Sono</h2>
        <input type="radio" id="no_pain_7" name="secao_7" value="0" {{ old('secao_7') == '0' ? 'checked' : '' }}>Meu sono não é perturbado por dor<br>
        
        <input type="radio" id="mild_pain_7" name="secao_7" value="1" {{ old('secao_7') == '1' ? 'checked' : '' }}>Algumas vezes meu sono é perturbado por dor<br>
        
        <input type="radio" id="moderate_pain_7" name="secao_7" value="2" {{ old('secao_7') == '2' ? 'checked' : '' }}>Por causa da dor, durmo menos de 6 horas<br>
        
        <input type="radio" id="moderately_severe_pain_7" name="secao_7" value="3" {{ old('secao_7') == '3' ? 'checked' : '' }}>Por causa da dor, durmo menos de 4 horas<br>
        
        <input type="radio" id="severe_pain_7" name="secao_7" value="4" {{ old('secao_7') == '4' ? 'checked' : '' }}>Por causa da dor, durmo menos de 2 horas<br>
        
        <input type="radio" id="worst_pain_imaginable_7" name="secao_7" value="5" {{ old('secao_7') == '5' ? 'checked' : '' }}>A dor me impede de dormir<br>
    </section>    
    
    <section>
        <h2>Seção 8: Vida sexual (se aplicável)</h2>
        <input type="radio" id="no_pain_8" name="secao_8" value="0" {{ old('secao_8') == '0' ? 'checked' : '' }}>Minha vida sexual é normal e não me causa dor extra<br>
        
        <input type="radio" id="mild_pain_8" name="secao_8" value="1" {{ old('secao_8') == '1' ? 'checked' : '' }}>Minha vida sexual é normal, mas me causa dor extra<br>
        
        <input type="radio" id="moderate_pain_8" name="secao_8" value="2" {{ old('secao_8') == '2' ? 'checked' : '' }}>Minha vida sexual é quase normal, mas é muito dolorosa<br>
        
        <input type="radio" id="moderately_severe_pain_8" name="secao_8" value="3" {{ old('secao_8') == '3' ? 'checked' : '' }}>Minha vida sexual é muito restringida devido à dor<br>
        
        <input type="radio" id="severe_pain_8" name="secao_8" value="4" {{ old('secao_8') == '4' ? 'checked' : '' }}>Minha vida sexual é praticamente inexistente devido à dor<br>
        
        <input type="radio" id="worst_pain_imaginable_8" name="secao_8" value="5" {{ old('secao_8') == '5' ? 'checked' : '' }}>A dor me impede de ter atividade sexual<br>
    </section>    
    
    <section>
        <h2>Seção 9: Vida social</h2>
        <input type="radio" id="0" name="secao_9" value="0" {{ old('secao_9') == '0' ? 'checked' : '' }}>Minha vida social é normal e eu não sinto dor extra<br>
        
        <input type="radio" id="1" name="secao_9" value="1" {{ old('secao_9') == '1' ? 'checked' : '' }}>Minha vida social é normal, mas aumenta o grau de minha dor<br>
        
        <input type="radio" id="2" name="secao_9" value="2" {{ old('secao_9') == '2' ? 'checked' : '' }}>A dor não altera minha vida social, exceto por impedir que faça atividades de esforço, como esportes, etc<br>
        
        <input type="radio" id="3" name="secao_9" value="3" {{ old('secao_9') == '3' ? 'checked' : '' }}>A dor restringiu minha vida social e eu não saio muito de casa<br>
        
        <input type="radio" id="4" name="secao_9" value="4" {{ old('secao_9') == '4' ? 'checked' : '' }}>A dor restringiu minha vida social a minha casa<br>
        
        <input type="radio" id="5" name="secao_9" value="5" {{ old('secao_9') == '5' ? 'checked' : '' }}>Não tenho vida social devido a minha dor<br>
    </section>    
    
    <section>
        <h2>Seção 10: Viagens</h2>
        <input type="radio" id="0" name="secao_10" value="0" {{ old('secao_10') == '0' ? 'checked' : '' }}>Posso viajar para qualquer lugar sem dor<br>
        
        <input type="radio" id="1" name="secao_10" value="1" {{ old('secao_10') == '1' ? 'checked' : '' }}>Posso viajar para qualquer lugar, mas sinto dor extra<br>
        
        <input type="radio" id="2" name="secao_10" value="2" {{ old('secao_10') == '2' ? 'checked' : '' }}>A dor é ruim, mas posso viajar por 2 horas<br>
        
        <input type="radio" id="3" name="secao_10" value="3" {{ old('secao_10') == '3' ? 'checked' : '' }}>A dor restringe minhas viagens para distâncias menores que 1 hora<br>
        
        <input type="radio" id="4" name="secao_10" value="4" {{ old('secao_10') == '4' ? 'checked' : '' }}>A dor restringe minhas viagens para as necessárias e menores de 30 minutos<br>
        
        <input type="radio" id="5" name="secao_10" value="5" {{ old('secao_10') == '5' ? 'checked' : '' }}>A dor me impede de viajar, exceto para ser tratado<br>
    </section>    
    <!-- Repeat the above structure for the remaining sections -->

    {{-- <footer>
        <p>
            Para cada seção de seis afirmações o ponto total é 5. Se a primeira afirmação é marcada, o ponto é 0. Se for o último, o ponto é 5. As afirmações intermediárias são pontuadas de acordo com este rank. Se mais que uma afirmação for assinalada em cada seção, escolha o maior ponto. Se todas as 10 seções forem completadas a pontuação é calculada da seguinte maneira: Se 16 pontos foi o ponto total sendo que são 50 os pontos possíveis, 16/50 X100= 32%. Se uma seção não for marcada ou não se aplica a pontuação é calculada da seguinte maneira, de acordo com o exemplo de pontuação máxima de 16: 16/40 X100= 35,5%. O autor recomenda arredondar a porcentagem para um número inteiro.
        </p>
        <p>
            Interpretação dos resultados:<br>
            0% a 20% - incapacidade mínima<br>
            21%a 40% - incapacidade moderada<br>
            41% a 60% - incapacidade intensa<br>
            61% a 80% - aleijado<br>
            81% a 100% - inválido<br>
        </p>
        <p>
            Interpretação dos resultados no pós-operatório:<br>
            O% a 20% - excelente<br>
            21% a 40% - bom<br>
            41% a 60% - inalterado<br>
            &gt; 60% - piora<br>
        </p>
        <p>
            ****************************************<br>
            (enviado pelo Dr. Fernando Dantas-BH)<br>
            * Apenas tradução-Para trabalhos e uso oficial, verificar a validação no Brasil.
        </p>
    </footer> --}}
</div>

