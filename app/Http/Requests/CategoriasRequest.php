<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriasRequest extends FormRequest
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
            //
            'name'          => 'required|max:15|min:5|alpha|unique:categories',
            'description'   => 'required|min:10|max:15',
            'status'        => 'required',
        ];
        
    }

public function messages()
{
    return [
        'name.required' => 'El nombre de la categoría es necesario',
        'name.max' => 'El nombre debe contener máximo 15 caracteres',
        'name.min' => 'El nombre debe contener al menos 5 caracteres',
        'name.alpha' => 'No se admiten números',
        'name.unique' => 'Este nombre ya existe !',

        'description.required'   => 'La descripción es requerida',
        'description.min' => 'La descripción debe contener al menos 10 caracteres',
        'description.max' => 'La descripción debe contener máximo 15 caracteres',
    ];
}

}
