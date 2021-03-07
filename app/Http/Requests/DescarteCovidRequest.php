<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DescarteCovidRequest extends FormRequest
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
            'usuario_id' => 'required',
            'pregunta_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'usuario_id.required' => "El usuario_id es requerido",
            'pregunta_id.required' => "L pregunta_id es requerida",
        ];
    }
}
