<?php

use App\Models\ParteAtingida;
use Illuminate\Database\Seeder;

class ParteAtingidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partes_atingidas = [
            '753030000' => 	'Crânio (inclusive encéfalo)',
            '753050000' => 	'Ouvido (externo, médio, interno, audição e equilíbrio)',
            '753070100' => 	'Olho (inclusive nervo ótico e visão)',
            '753070300' => 	'Nariz (inclusive fossas nasais, seios da face e olfato)',
            '753070500' => 	'Boca (inclusive lábios, dentes, língua, garganta e paladar)',
            '753070700' => 	'Mandíbula (inclusive queixo)',
            '753070800' => 	'Face, partes múltiplas (qualquer combinação das partes acima)',
            '753080000' => 	'Cabeça, partes múltiplas (qualquer combinação das partes acima)',
            '753090000' => 	'Cabeça, NIC',
            '753510000' => 	'Braço (entre o punho a o ombro)',
            '753510200' => 	'Braço (acima do cotovelo)',
            '754000000' => 	'Pescoço',
            '755010400' => 	'Cotovelo',
            '755010600' => 	'Antebraço (entre o punho e o cotovelo)',
            '755030000' => 	'Punho',
            '755050000' => 	'Mão (exceto punho ou dedos)',
            '755070000' => 	'Dedo',
            '755080000' => 	'Membros superiores, partes múltiplas (qualquer combinação das partes acima)',
            '755090000' => 	'Membros superiores, NIC',
            '756020000' => 	'Ombro',
            '756030000' => 	'Tórax (inclusive órgãos internos)',
            '756040000' => 	'Dorso (inclusive músculos dorsais, coluna e medula espinhal)',
            '756050000' => 	'Abdome (inclusive órgãos internos)',
            '756060000' => 	'Quadris (inclusive pélvis, órgãos pélvicos e nádegas)',
            '756070000' => 	'Tronco, partes múltiplas (qualquer combinação das partes acima)',
            '756090000' => 	'Tronco, NIC',
            '757010000' => 	'Perna (entre o tornozelo e a pélvis)',
            '757010200' => 	'Coxa',
            '757010400' => 	'Joelho',
            '757010600' => 	'Perna (do tornozelo, exclusive, ao joelho, exclusive)',
            '757030000' => 	'Articulação do tornozelo',
            '757050000' => 	'Pé (exceto artelhos)',
            '757070000' => 	'Artelho',
            '757080000' => 	'Membros inferiores, partes múltiplas (qualquer combinação das partes acima)',
            '757090000' => 	'Membros inferiores, NIC',
            '758000000' => 	'Partes múltiplas. Aplica-se quando mais de uma parte importante do corpo for afetada, como por exemplo, um braço e uma perna',
            '758500000' => 	'Sistemas e aparelhos. Aplica-se quando o funcionamento de todo um sistema ou aparelho do corpo humano for afetado, sem lesão específica de qualquer outra parte, como no caso do envenenamento, ação corrosiva que afete órgãos internos, lesão dos centros nervosos, etc. não se aplica quando a lesão sistêmica for provocada por lesão externa, como lesão dorsal que afete nervos da medula espinhal.',
            '758520000' => 	'Aparelho circulatório',
            '758530000' => 	'Aparelho respiratório',
            '758540000' => 	'Sistema nervoso',
            '758550000' => 	'Aparelho digestivo',
            '758560000' => 	'Aparelho gênito-urinário',
            '758570000' => 	'Sistema musculoesquelético',
            '758590000' => 	'Sistemas e aparelhos, NIC',
            '759000000' => 	'Localização da lesão, NIC',
        ];

        foreach($partes_atingidas as $key => $parte_atingida) {
            ParteAtingida::create([
                'parte_atingida_codigo' => $key,
                'parte_atingida_descricao' => $parte_atingida
            ]);
        }
    }
}
