<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosRequest extends FormRequest
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
            'name'          => 'required|max:30|min:5|unique:products',
            'cost'          => 'required|numeric|between:1,5|integer',
            'mark'          => 'required|max:30|min:5',            
            'status'        => 'required',

        ];
    }
    public function messages()
{
    return [
        'name.required' => 'El nombre del producto es necesario',
        'name.max' => 'El nombre debe contener máximo 30 caracteres',
        'name.min' => 'El nombre debe contener al menos 5 caracteres',
        'name.unique' => 'Ya existe un producto con este nombre',

        'mark.required' => 'El nombre de la marca es necesario',
        'mark.max' => 'El nombre debe contener máximo 30 caracteres',
        'mark.min' => 'El nombre debe contener al menos 5 caracteres',
    
        'cost.required' => 'El costo es requerido',
        'cost.numeric' => 'Solo se admiten numeros',
        'cost.between' => 'El costo debe estar en un rango de 1 a 5 numeros',
    ];
}

}
