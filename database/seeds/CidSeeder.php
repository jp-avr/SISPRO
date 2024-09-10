<?php

use App\Models\Cid;
use Illuminate\Database\Seeder;

class CidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cids = [
            'Cólera' => 'A00',
            'Febres tifóide e paratifóide' => 'A01',
            'Shiguelose' => 'A03',
            'Amebíase' => 'A06',
            'Diarréia e gastroenterite de origem infecciosa presumível' => 'A09',
            'Outras doenças infecciosas intestinais' => 'A02, A04-A05, A07-A08',
            'Tuberculose respiratória' => 'A15-A16',
            'Tuberculose pulmonar' => 'A15.0-A15.3, A16.0-A16.3',
            'Outras tuberculoses respiratórias' => 'A15.4-A15.9, A16.4-A16.9',
            'Outras tuberculoses' => 'A17-A19',
            'Tuberculose do sistema nervoso' => 'A17',
            'Tuberculose do intestino, do peritônio e dos gânglios mesentéricos' => 'A18.3',
            'Tuberculose óssea e das articulações' => 'A18.0',
            'Tuberculose do aparelho geniturinário' => 'A18.1',
            'Tuberculose miliar' => 'A19',
            'Restante de outras tuberculoses' => 'A18.2, A18.4-A18.8',
            'Peste' => 'A20',
            'Brucelose' => 'A23',
            'Hanseníase [lepra]' => 'A30',
            'Tétano neonatal' => 'A33',
            'Outros tétanos' => 'A34-A35',
            'Difteria' => 'A36',
            'Coqueluche' => 'A37',
            'Infecção meningocócica' => 'A39',
            'Septicemia' => 'A40-A41',
            'Outras doenças bacterianas' => 'A21-A22, A24-A28, A31-A32, A38, A42-A49',
            'Leptospirose icterohemorrágica' => 'A27.0',
            'Outras formas de leptospirose' => 'A27.8',
            'Leptospirose não especificada' => 'A27.9',
            'Restante de outras doenças bacterianas' => 'A21-A22, A24-A26, A28, A31-A32, A38, A42-A49',
            'Sífilis congênita' => 'A50',
            'Sífilis precoce' => 'A51',
            'Outras sífilis' => 'A52-A53',
            'Infecção gonocócica' => 'A54',
            'Doenças por clamídias transmitidas por via sexual' => 'A55-A56',
            'Outras infecções com transmissão predominantemente sexual' => 'A57-A64',
            'Febres recorrentes' => 'A68',
            'Tracoma' => 'A71',
            'Tifo exantemático' => 'A75',
            'Poliomielite aguda' => 'A80',
            'Raiva' => 'A82',
            'Encefalite viral' => 'A83-A86',
            'Febre amarela' => 'A95',
            'Outras febre por arbovírus e febres hemorrágicas por vírus' => 'A90-A94, A96-A99',
            'Dengue [dengue clássico]' => 'A90',
            'Febre hemorrágica devida ao vírus da dengue' => 'A91',
            'Restante de outras febre por arbovírus e febres hemorrágicas por vírus' => 'A92-A94, A96-A99',
            'Infecções pelo vírus do herpes' => 'B00',
            'Varicela e herpes zoster' => 'B01-B02',
            'Sarampo' => 'B05',
            'Rubéola' => 'B06',
            'Hepatite aguda B' => 'B16',
            'Outras hepatites virais' => 'B15, B17-B19',
            'Doença pelo vírus da imunodeficiência humana [HIV]' => 'B20-B24',
            'Caxumba [parotidite epidêmica]' => 'B26',
            'Outras doenças virais' => 'A81, A87-A89, B03-B04, B07-B09, B25, B27-B34',
            'Meningite viral' => 'A87',
            'Restante de outras doenças virais' => 'A81, A88-A89, B03-B04, B07-B09, B25, B27-B34',
            'Micoses' => 'B35-B49',
            'Malária' => 'B50-B54',
            'Malária por Plasmodium falciparum' => 'B50',
            'Malária por Plasmodium vivax' => 'B51',
            'Malária por Plasmodium malariae' => 'B52',
            'Outras formas de malária confirmadas por exames parasitológicos' => 'B53',
            'Malária não especificada' => 'B54',
            'Leishmaniose' => 'B55',
            'Leishmaniose visceral' => 'B55.0',
            'Leishmaniose cutânea' => 'B55.1',
            'Leishmaniose cutâneo-mucosa' => 'B55.2',
            'Leishmaniose não especificada' => 'B55.9',
            'Tripanossomíase' => 'B56-B57',
            'Esquistossomose' => 'B65',
            'Outras infestações por trematódeos' => 'B66',
            'Equinococose' => 'B67',
            'Dracunculíase' => 'B72',
            'Oncocercose' => 'B73',
            'Filariose' => 'B74',
            'Ancilostomíase' => 'B76',
            'Outras helmintíases' => 'B68-B71, B75, B77-B83',
            'Seqüelas de tuberculose' => 'B90',
            'Seqüelas de poliomielite' => 'B91',
            'Seqüelas de hanseníase [lepra]' => 'B92',
            'Outras doenças infecciosas e parasitárias' => 'A65-A67, A69-A70, A74, A77-A79, B58-B64, B85-B89, B94-B99',
            'Neoplasias [tumores]' => 'C00-D48',
            'Neoplasia maligna do lábio, cavidade oral e faringe' => 'C00-C14',
            'Neoplasia maligna do esôfago' => 'C15',
            'Neoplasia maligna do estômago' => 'C16',
            'Neoplasia maligna do cólon' => 'C18',
            'Neoplasia maligna da junção retossigmóide, reto, ânus e canal anal' => 'C19-C21',
            'Neoplasia maligna do fígado e das vias biliares intra-hepáticas' => 'C22',
            'Neoplasia maligna do pâncreas' => 'C25',
            'Outras neoplasias malignas de órgãos digestivos' => 'C17, C23-C24, C26',
            'Neoplasias malignas de laringe' => 'C32',
            'Neoplasia maligna da traquéia, dos brônquios e dos pulmões' => 'C33-C34',
            'Outras neoplasias malignas de órgãos respiratórios e intratorácicos' => 'C30-C31, C37-C39',
            'Neoplasia maligna do osso e da cartilagem articular' => 'C40-C41',
            'Neoplasia maligna da pele' => 'C43',
            'Outras neoplasias malignas da pele' => 'C44',
            'Neoplasias malignas do tecido mesotelial e tecidos moles' => 'C45-C49',
            'Neoplasia maligna da mama' => 'C50',
            'Neoplasia maligna do colo do útero' => 'C53',
            'Neoplasia maligna de outras porções e de porções não especificadas do útero' => 'C54-C55',
            'Outras neoplasias malignas dos órgãos genitais femininos' => 'C51-C52, C56-C58',
            'Neoplasia maligna da próstata' => 'C61',
            'Outras neoplasias malignas dos órgãos genitais masculinos' => 'C60, C62-C63',
            'Neoplasia maligna da bexiga' => 'C67',
            'Outras neoplasias malignas do trato urinário' => 'C64-C66, C68',
            'Neoplasia maligna dos olhos e anexos' => 'C69',
            'Neoplasia maligna do encéfalo' => 'C71',
            'Neoplasia maligna de outras partes do sistema nervoso central' => 'C70, C72',
            'Neoplasias malignas de outras localizações, de localização mal definida, secundárias e de localização não especificada' => 'C73-C80, C97',
            'Doença de Hodgkin' => 'C81',
            'Linfoma não-Hodgkin' => 'C82-C85',
            'Leucemia' => 'C91-C95',
            'Outras neoplasias malignas de tecidos linfóide, hematopoético e relacionados' => 'C88-C90, C96',
            'Carcinoma in situ de colo do útero' => 'D06',
            'Neoplasia benigna da pele' => 'D22-D23',
            'Neoplasia benigna da mama' => 'D24',
            'Leiomioma do útero' => 'D25',
            'Neoplasia benigna do ovário' => 'D27',
            'Neoplasia benigna dos órgãos urinários' => 'D30',
            'Neoplasia benigna do encéfalo e de outras partes do sistema nervoso central' => 'D33',
            'Outras neoplasias in situ e neoplasias benignas e neoplasias de comportamento incerto ou desconhecido' => 'D00-D05, D07-D21, D26, D28-D29, D31-D32, D34-D48',
            'Doenças do sangue e dos órgãos hematopoéticos e alguns transtornos imunitários' => 'D50-D89',
            'Anemia por deficiência de ferro' => 'D50',
            'Outras anemias' => 'D51-D64',
            'Afecções hemorrágicas e outras doenças do sangue e dos órgãos hematopoéticos' => 'D65-D77',
            'Alguns transtornos envolvendo o mecanismo imunitário' => 'D80-D89',
            'Doenças endócrinas, nutricionais e metabólicas' => 'E00-E90',
            'Transtornos tireoidianos relacionados à deficiência de iodo' => 'E00-E02',
            'Tireotoxicose' => 'E05',
            'Outros transtornos tireoidianos' => 'E03-E04, E06-E07',
            'Diabetes mellitus' => 'E10-E14',
            'Desnutrição' => 'E40-E46',
            'Deficiência de vitamina A' => 'E50',
            'Outras deficiências vitamínicas' => 'E51-E56',
            'Seqüelas de desnutrição e de outras deficiências nutricionais' => 'E64',
            'Obesidade' => 'E66',
            'Depleção de volume' => 'E86',
            'Outros transtornos endócrinos, nutricionais e metabólicos' => 'E15-E35, E58-E63, E65, E67-E85, E87-E90',
            'Transtornos mentais e comportamentais' => 'F00-F99',
            'Demência' => 'F00-F03',
            'Transtornos mentais e comportamentais devidos ao uso de álcool' => 'F10',
            'Transtornos mentais e comportamentais devidos ao uso de outras substâncias psicoativas' => 'F11-F19',
            'Esquizofrenia, transtornos esquizotípicos e delirantes' => 'F20-F29',
            'Transtornos de humor [afetivos]' => 'F30-F39',
            'Transtornos neuróticos, transtornos relacionados com o "stress" e transtornos somatoformes' => 'F40-F48',
            'Retardo mental' => 'F70-F79',
            'Outros transtornos mentais e comportamentais' => 'F04-F09, F50-F69, F80-F99',
            'Doenças do sistema nervoso' => 'G00-G99',
            'Doenças inflamatórias do sistema nervoso central' => 'G00-G09',
            'Meningite bacteriana, não classificada em outra parte' => 'G00',
            'Meningite em doenças bacterianas classificadas em outra parte' => 'G01',
            'Meningite em outras doenças infecciosas e parasitárias classificadas em outra parte' => 'G02',
            'Meningite devida a outras causas e a causas não especificadas' => 'G03',
            'Restante de doenças inflamatórias do sistema nervoso central' => 'G04-G09',
            'Doença de Parkinson' => 'G20',
            'Doença de Alzheimer' => 'G30',
            'Esclerose múltiplas' => 'G35',
            'Epilepsia' => 'G40-G41',
            'Enxaqueca e outras síndromes de algias cefálicos' => 'G43-G44',
            'Acidentes vasculares cerebrais isquêmicos transitórios e síndromes correlatas' => 'G45',
            'Transtornos dos nervos, das raízes e dos plexos nervosos' => 'G50-G59',
            'Paralisia cerebral e outras síndromes paralíticas' => 'G80-G83',
            'Outras doenças do sistema nervoso' => 'G10-G13, G21-G26, G31-G32, G36-G37, G46-G47, G60-G73, G90-G99',
            'Doenças do olho e anexos' => 'H00-H59',
            'Inflamação da pálpebra' => 'H00-H01',
            'Conjuntivite e outros transtornos da conjuntiva' => 'H10-H13',
            'Ceratite e outros transtornos da esclerótica e da córnea' => 'H15-H19',
            'Catarata e outros transtornos do cristalino' => 'H25-H28',
            'Descolamentos e defeitos da retina' => 'H33',
            'Glaucoma' => 'H40-H42',
            'Estrabismo' => 'H49-H50',
            'Transtornos da refração e da acomodação' => 'H52',
            'Cegueira e visão subnormal' => 'H54',
            'Outras doenças do olho e anexos' => 'H02-H06, H20-H22, H30-H32, H34-H36, H43-H48, H51, H53, H55-H59',
            'Doenças do ouvido e da apófise mastóide' => 'H60-H95',
            'Otite média e outros transtornos do ouvido médio e da apófise mastóide' => 'H65-H75',
            'Perda de audição' => 'H90-H91',
            'Outras doenças do ouvido e da apófise mastóide' => 'H60-H62, H80-H83, H92-H95',
            'Doenças do aparelho circulatório' => 'I00-I99',
            'Febre reumática aguda' => 'I00-I02',
            'Doença reumática crônica do coração' => 'I05-I09',
            'Hipertensão essencial (primária)' => 'I10',
            'Outras doenças hipertensivas' => 'I11-I15',
            'Infarto agudo do miocárdio' => 'I21-I22',
            'Outras doenças isquêmicas do coração' => 'I20, I23-I25',
            'Embolia pulmonar' => 'I26',
            'Transtornos de condução e arritmias cardíacas' => 'I44-I49',
            'Insuficiência cardíaca' => 'I50',
            'Outras doenças do coração' => 'I27-I43, I51-I52',
            'Hemorragia intracraniana' => 'I60-I62',
            'Infarto cerebral' => 'I63',
            'Acidente vascular cerebral, não especificado como hemorrágico ou isquêmico' => 'I64',
            'Outras doenças cerebrovasculares' => 'I65-I69',
            'Ateroesclerose' => 'I70',
            'Outras doenças vasculares periféricas' => 'I73',
            'Embolia e trombose arteriais' => 'I74',
            'Outras doenças das artérias, arteríolas e capilares' => 'I71-I72, I77-I79',
            'Flebite, tromboflebite, embolia e trombose venosa' => 'I80-I82',
            'Veias varicosas das extremidades inferiores' => 'I83',
            'Hemorróidas' => 'I84',
            'Outras doenças do aparelho circulatório' => 'I85-I99',
            'Doenças do aparelho respiratório' => 'J00-J99',
            'Faringite aguda e amigdalite aguda' => 'J02-J03',
            'Laringite e traqueíte agudas' => 'J04',
            'Outras infecções agudas das vias aéreas superiores' => 'J00-J01, J05-J06',
            'Influenza [gripe]' => 'J09-J11',
            'Pneumonia' => 'J12-J18',
            'Bronquite aguda e bronquiolite aguda' => 'J20-J21',
            'Sinusite crônica' => 'J32',
            'Outras doenças do nariz e dos seios paranasais' => 'J30-J31, J33-J34',
            'Doenças crônicas das amígdalas e das adenóides' => 'J35',
            'Outras doenças do trato respiratório superior' => 'J36-J39',
            'Bronquite, enfisema e outras doenças pulmonares obstrutivas crônicas' => 'J40-J44',
            'Asma' => 'J45-J46',
            'Bronquiectasia' => 'J47',
            'Pneumoconiose' => 'J60-J65',
            'Outras doenças do aparelho respiratório' => 'J22, J66-J99',
            'Doenças do aparelho digestivo' => 'K00-K93',
            'Cárie dentária' => 'K02',
            'Outros transtornos dos dentes e estruturas de suporte' => 'K00-K01, K03-K08',
            'Outras doenças da cavidade oral, glândulas salivares e dos maxilares' => 'K09-K14',
            'Úlcera gástrica e duodenal' => 'K25-K27',
            'Gastrite e duodenite' => 'K29',
            'Outras doenças do esôfago, estômago e duodeno' => 'K20-K23, K28, K30-K31',
            'Doenças do apêndice' => 'K35-K38',
            'Hérnia inguinal' => 'K40',
            'Outras hérnias' => 'K41-K46',
            'Doença de Crohn e colite ulcerativa' => 'K50-K51',
            'Íleo paralítico e obstrução intestinal sem hérnia' => 'K56',
            'Doença diverticular do intestino' => 'K57',
            'Outras doenças dos intestinos e peritônio' => 'K52-K55, K58-K67',
            'Doença alcoólica do fígado' => 'K70',
            'Outras doenças do fígado' => 'K71-K77',
            'Colelitíase e colecistite' => 'K80-K81',
            'Pancreatite aguda e outras doenças do pâncreas' => 'K85-K86',
            'Outras doenças do aparelho digestivo' => 'K82-K83, K87-K93',
            'Doenças da pele e do tecido subcutâneo' => 'L00-L99',
            'Infecções da pele e do tecido subcutâneo' => 'L00-L08',
            'Outras doenças da pele e do tecido subcutâneo' => 'L10-L99',
            'Doenças do sistema osteomuscular e do tecido conjuntivo' => 'M00-M99',
            'Artrite reumatóide e outras poliartropatias inflamatórias' => 'M05-M14',
            'Artrose' => 'M15-M19',
            'Deformidades adquiridas das articulações' => 'M20-M21',
            'Outros transtronos articulares' => 'M00-M03, M22-M25',
            'Doenças sistêmicas do tecido conjuntivo' => 'M30-M36',
            'Transtornos discais cervicais e outros transtornos discais intervertebrais' => 'M50-M51',
            'Outras dorsopatias' => 'M40-M49, M53-M54',
            'Transtornos do tecido mole' => 'M60-M79',
            'Transtornos da densidade e da estrutura ósseas' => 'M80-M85',
            'Osteomielite' => 'M86',
            'Outras doenças do sistema osteomuscular e do tecido conjuntivo' => 'M87-M99',
            'Doenças do aparelho geniturinário' => 'N00-N99',
            'Síndrome nefríticas aguda e rapidamente progressiva' => 'N00-N01',
            'Outras doenças glomerulares' => 'N02-N08',
            'Doenças renais túbulo-intersticiais' => 'N10-N16',
            'Insuficiência renal' => 'N17-N19',
            'Urolitíase' => 'N20-N23',
            'Cistite' => 'N30',
            'Outras doenças do aparelho urinário' => 'N25-N29, N31-N39',
            'Hiperplasia da próstata' => 'N40',
            'Outros transtornos da próstata' => 'N41-N42',
            'Hidrocele e espermatocele' => 'N43',
            'Preprúcio redundante, fimose e parafimose' => 'N47',
            'Outras doenças dos órgãos genitais masculinos' => 'N44-N46, N48-N51',
            'Transtornos da mama' => 'N60-N64',
            'Salpingite e ooforite' => 'N70',
            'Doença inflamatória do colo do útero' => 'N72',
            'Outras doenças inflamatórias dos órgãos pélvicos femininos' => 'N71, N73-N77',
            'Endometriose' => 'N80',
            'Prolapso genital feminino' => 'N81',
            'Transtornos não-inflamatórios do ovário, da trompa de Falópio e do ligamento largo' => 'N83',
            'Transtornos da menstruação' => 'N91-N92',
            'Transtornos menopáusicos e outros transtornos perimenopáusicos' => 'N95',
            'Infertilidade feminina' => 'N97',
            'Outros transtornos do aparelho geniturinário' => 'N82, N84-N90, N93-N94, N96, N98-N99',
            'Gravidez, parto e puerpério' => 'O00-O99',
            'Aborto espontâneo' => 'O03',
            'Aborto por razões médicas' => 'O04',
            'Outras gravidezes que terminam em aborto' => 'O00-O02, O05-O08',
            'Edema, proteinúria e transtornos hipertensivos na gravidez, parto e puerpério' => 'O10-O16',
            'Placenta prévia, descolamento prematuro de placenta e hemorragia anteparto' => 'O44-O46',
            'Outros motivos de assistência à mãe relacionados à cavidade fetal e amniótica, e possíveis problemas de parto' => 'O30-O43, O47-O48',
            'Trabalho de parto obstruído' => 'O64-O66',
            'Hemorragia pós-parto' => 'O72',
            'Outras complicações da gravidez e do parto' => 'O20-O29, O60-O63, O67-O71, O73-O75, O81-O84',
            'Parto único espontâneo' => 'O80',
            'Complicações predominantemente relacionadas ao puerpério e outras afecções obstétricas, não classificadas em outra parte' => 'O85-O99',
            'Algumas afecções originadas no período perinatal' => 'P00-P96',
            'Feto e recém-nascido afetados por fatores maternos e por complicações da gravidez, trabalho de parto e parto' => 'P00-P04',
            'Retardo de crescimento fetal, desnutrição fetal e transtornos relacionados à gestação curta e baixo peso ao nascer' => 'P05-P07',
            'Trauma durante o nascimento' => 'P10-P15',
            'Hipóxia intrauterina e asfixia ao nascer' => 'P20-P21',
            'Outros transtornos respiratórios originados no período perinatal' => 'P22-P28',
            'Doenças infecciosas e parasitárias congênitas' => 'P35-P37',
            'Outras infecções específicas do período perinatal' => 'P38-P39',
            'Doença hemolítica do feto e do recém-nascido' => 'P55',
            'Outras afecções originadas no período perinatal' => 'P08, P29, P50-P54, P56-P96',
            'Malformações congênitas, deformidades e anomalias cromossômicas' => 'Q00-Q99',
            'Espinha bífida' => 'Q05',
            'Outras malformações congênitas do sistema nervoso' => 'Q00-Q04, Q06-Q07',
            'Malformações congênitas do aparelho circulatório' => 'Q20-Q28',
            'Fenda labial e fenda palatina' => 'Q35-Q37',
            'Ausência, atresia e estenose do intestino delgado' => 'Q41',
            'Outras malformações congênitas do aparelho digestivo' => 'Q38-Q40, Q42-Q45',
            'Testiculo não-descido' => 'Q53',
            'Outras malformações do aparelho geniturinário' => 'Q50-Q52, Q54-Q64',
            'Deformidades congênitas do quadril' => 'Q65',
            'Deformidades congênitas dos pés' => 'Q66',
            'Outras malformações e deformidades congênitas do aparelho osteomuscular' => 'Q67-Q79',
            'Outras malformações congênitas' => 'Q10-Q18, Q30-Q34, Q80-Q89',
            'Anomalias cromossômicas, não classificadas em outra parte' => 'Q90-Q99',
            'Sintomas, sinais e achados anormais de exames clínicos e de laboratório, não classificados em outra parte' => 'R00-R99',
            'Dor abdominal e pélvica' => 'R10',
            'Febre de origem desconhecida' => 'R50',
            'Senilidade' => 'R54',
            'Outros sintomas, sinais e achados anormais de exames clínicos e de laboratório, não classificados em outra parte' => 'R00-R09, R11-R49, R51-R53, R55-R99',
            'Lesões, envenenamentos e algumas outras conseqüências de causas externas' => 'S00-T98',
            'Fratura do crânio e dos ossos da face' => 'S02',
            'Fratura do pescoço, tórax ou pelve' => 'S12, S22, S32, T08',
            'Fratura do fêmur' => 'S72',
            'Fratura de outros ossos dos membros' => 'S42, S52, S62, S82, S92, T10, T12',
            'Fraturas envolvendo múltiplas regiões do corpo' => 'T02',
            'Luxações, entorse e distensão de regiões especificadas e de regiões múltiplas do corpo' => 'S03, S13, S23, S33, S43, S53, S63, S73, S83, S93, T03',
            'Traumatismo do olho e da órbita ocular' => 'S05',
            'Traumatismo intracraniano' => 'S06',
            'Traumatismo de outros órgãos internos' => 'S26-S27, S36-S37',
            'Lesões por esmagamento e amputações traumáticas de regiões especificadas e de múltiplas regiões do corpo' => 'S07-S08, S17-S18, S28, S38, S47-S48, S57-S58, S67-S68, S77-S78, S87-S88, S97-S98, T04-T05',
            'Outros traumatismos de regiões especificadas e não especificadas e de regiões múltiplas do corpo' => 'S00-S01, S04, S09-S11, S14-S16, S19-S21, S24-S25, S29-S31, S34-S35, S39-S41, S44-S46, S49-S51, S54-S56, S59-S61, S64-S66, S69-S71, S74-S76, S79-S81, S84-S86, S89-S91, S94-S96, S99, T00-T01, T06-T07, T09, T11, T13-T14',
            'Efeitos de corpo estranho que entra através de orifício natural' => 'T15-T19',
            'Queimadura e corrosões' => 'T20-T32',
            'Envenenamento por drogas e substâncias biológicas' => 'T36-T50',
            'Efeitos tóxicos de substâncias de origem principalmente não-medicinal' => 'T51-T65',
            'Síndromes de maus tratos' => 'T74',
            'Outros efeitos e os efeitos não especificados de causas externas' => 'T33-T35, T66-T73, T75-T78',
            'Certas complicações precoces de traumatismo e complicações cirúrgicas, e da assistência médica não classificadas em outra parte' => 'T79-T88',
            'Seqüelas de traumatismos, de envenenamento e de outras conseqüências de causas externas' => 'T90-T98',
            'Causas externas de morbidade e de mortalidade' => 'V01-Y98',
            'Acidentes de transporte' => 'V01-V99',
            'Quedas' => 'W00-W19',
            'Afogamento e submersão acidentais' => 'W65-W74',
            'Exposição ao fumo, ao fogo e às chamas' => 'X00-X09',
            'Envenenamento, intoxicação por ou exposição a substâncias nocivas' => 'X40-X49',
            'Lesões autoprovocadas voluntariamente' => 'X60-X84',
            'Agressões' => 'X85-Y09',
            'Todas as outras causas externas' => 'W20-W64, W75-W99, X10-X39, X50-X59, Y10-Y89',
            'Fatores que exercem influência sobre o estado de saúde e o contato com serviços de saúde' => 'Z00-Z99',
            'Visão Monocular' => 'H54-5',
        ];

        foreach ($cids as $key => $cid){
            Cid::create([
                'cid_codigo' => $cid,
                'cid_descricao' => $key
            ]);
        }
    }
}
