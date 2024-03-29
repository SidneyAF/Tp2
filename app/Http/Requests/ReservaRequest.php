<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
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
        return [
            'nome' => 'required|max:100',
            'idade' => 'required|numeric',
            'rg' => 'required|numeric',
            'telefone' => 'required|numeric',
            'qtdPessoas' => 'required',
            'checkin' => 'required',
            'checkout' => 'required'
        ];
    }
}
