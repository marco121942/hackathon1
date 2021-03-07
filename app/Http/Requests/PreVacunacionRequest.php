<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreVacunacionRequest extends FormRequest
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
            'respuesta' => 'required|in:SI,NO',
        ];
    }

    public function messages()
    {
        return [
            'usuario_id.required' => "El usuario_id es requerido",
            'pregunta_id.required' => "L pregunta_id es requerida",
            'respuesta.required' => "La respuesta es requerida",
        ];
    }
}
