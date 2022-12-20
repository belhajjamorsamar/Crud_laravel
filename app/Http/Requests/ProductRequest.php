<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        //pour ajouter des regles sur les formulaire
        return [
        'name'=>['bail','required','string','min:3'],
        'Category'=>['bail','required','string'],
        'Prix-unitaire'=>['bail','required','bigInteger'],
        'devise'=>['bail','required','string'],
        'Qte'=>['bail','required','integer'],
        'description'=>['bail','required','string'],
        ];
    }
}
