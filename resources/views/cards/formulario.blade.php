    <style>
        .caixa {
            max-width: 800px;
            margin: 20px auto;
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
<div class="caixa">
    <h1>Índice Oswestry 2.0 de Incapacidade</h1>
    <p>
        Por favor, você poderia completar este questionário? Ele é elaborado para nos dar informações de como seu problema nas costas (ou pernas) têm afetado seu dia-a-dia.
        <br>
        Por favor, responda a todas as seções. Marque apenas um quadrado em cada seção, aquele que mais de perto descreve você hoje.
    </p>
    
    <section>
        <h2>Seção 1: Intensidade da dor</h2>
        <div></div>
        <input type="radio" id="no_pain" name="secao_1" value="no_pain">Sem dor no momento<br>
        
        <input type="radio" id="mild_pain" name="secao_1" value="mild_pain">A dor é leve nesse momento<br>
        
        <input type="radio" id="moderate_pain" name="secao_1" value="moderate_pain">A dor é moderada nesse momento<br>
        
        <input type="radio" id="moderately_severe_pain" name="secao_1" value="moderately_severe_pain">A dor é mais ou menos intensa nesse momento<br>
        
        <input type="radio" id="severe_pain" name="secao_1" value="severe_pain">A dor é muito forte nesse momento<br>
        
        <input type="radio" id="worst_pain_imaginable" name="secao_1" value="worst_pain_imaginable">A dor é a pior imaginável nesse momento<br>
    </section>

    <section>
        <h2>Seção 2: Cuidados pessoais (Vestir-se, tomar banho etc)</h2>
        <input type="radio" id="no_pain_2" name="secao_2" value="no_pain_2">Sem dor no momento<br>
        
        <input type="radio" id="mild_pain_2" name="secao_2" value="mild_pain_2">A dor é leve nesse momento<br>
        
        <input type="radio" id="moderate_pain_2" name="secao_2" value="moderate_pain_2">A dor é moderada nesse momento<br>
        
        <input type="radio" id="moderately_severe_pain_2" name="secao_2" value="moderately_severe_pain_2">A dor é mais ou menos intensa nesse momento<br>
        
        <input type="radio" id="severe_pain_2" name="secao_2" value="severe_pain_2">A dor é muito forte nesse momento<br>
        
        <input type="radio" id="worst_pain_imaginable_2" name="secao_2" value="worst_pain_imaginable_2">A dor é a pior imaginável nesse momento<br>
    </section>
    
    <!-- Repeat the above structure for the remaining sections -->

    <footer>
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
    </footer>
</div>

