<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'nom'=>'required|string|max:50',
            'prenom'=>'required|string|max:50',
            'email'=>'required|string|max:50',
            'code_client'=>'required|unique:clients,codeClient',
            'mode_contact'=>'required|string|max:225',
            'date_contact'=>'required|date',
            'adresse'=>'required',
            'adresse'=> 'nullable',
        ];
    }
}
