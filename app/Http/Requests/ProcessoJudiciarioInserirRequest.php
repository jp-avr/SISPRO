<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ProcessoJudiciarioInserirRequest extends ClienteInserirRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return parent::rules() + [
            'proc_jud_numero_proc' => ['string', 'required'],
            'proc_jud_nome_perito' => ['string', 'required'],
            'proc_jud_numero_req' => ['string', 'required'],
            'proc_jud_data_exame' => ['date', 'required'],
            'cid_id' => ['integer', 'required'],
            'proc_jud_data_ini_incapacidade' => ['date', 'required'],
            'proc_jud_data_ini_doenca' => ['date', 'required'],
            'proc_jud_parte_atingida' => ['string', 'required'],   
            'proc_jud_historia' => ['string', 'required'],  
            'proc_jud_consideracoes' => ['string', 'nullable']      
        ];
    }

    public function messages()
    {
        return parent::messages();
    }
}
