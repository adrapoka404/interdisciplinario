<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiasRequest extends FormRequest
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
            'name'          => 'required|max:30|min:5|unique:notices',
            'editor'        => 'required|max:30|min:5|alpha',
            'case'          => 'required|max:40|min:15',
            'status'        => 'required',
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'El nombre de la noticia es necesario',
        'name.max' => 'El nombre debe contener máximo 30 caracteres',
        'name.min' => 'El nombre debe contener al menos 5 caracteres',
        'name.unique' => 'Este nombre ya existe !',

        'editor.required'   => 'El nombre del editor es necesario',
        'editor.max' => 'El nombre debe contener máximo 30 caracteres',
        'editor.min'  => 'El nombre debe contener al menos 5 caracteres',
        'editor.alpha' => 'No se admiten números',

        'case.required'   => 'Describir el caso de la noticia es requerido',
        'case.max' => 'El caso debe contener máximo 40 caracteres',
        'case.min'  => 'El caso debe contener al menos 15 caracteres',
    ];
}
}
