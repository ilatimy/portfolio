<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            //bail = dès la première erreur, on arrête de vérifier
            'name'     => 'bail|required|between:5,20|alpha', //champ requis, compris entre 5 et 20 caractères alphanumériques
            'email'   => 'bail|required|email', //format email
            'message' => 'bail|required|max:250' //maximum 250 caractères
        ];
    }
}
