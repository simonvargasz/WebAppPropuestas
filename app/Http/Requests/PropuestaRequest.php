<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropuestaRequest extends FormRequest
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
			'id' => 'required',
			'fecha' => 'required',
			'documento' => 'required',
			'estado' => 'required',
			'estudiante_rut' => 'required',
        ];
    }
}
