<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Profesor_propuestumRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return
        [
			'propuesta_id' => 'required',
			'profesor_rut' => 'required',
			'fecha' => 'required',
			'hora' => 'required',
			'comentario' => 'required',
        ];
    }
}
