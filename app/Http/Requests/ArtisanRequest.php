<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtisanRequest extends FormRequest
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

        switch($this->method()) {
            case'POST' :
                return  [
                    'name' => 'required|string|max:255',
                    'prenom'=> 'required|string|max:255',
                    'email'=> 'nullable',
                    'commune'=> 'required|string|max:255',
                    'zone_intervention'=> 'nullable',
                    'telephone'=> 'required',
                    'num_whattsap'=> 'nullable',
                    'adresse'=> 'required|string|max:255',
                    'speciality_id'=> 'required|exists:specialities,id',
                    'date_adhesion'=> 'required|date',
                    'photo'=> 'required|mimes:png,jpg,jpeg',
                    'description'=> 'nullable',
                    'status'=> 'required',

                ];
                break ;

                case 'PATCH' :
                case 'PUT':
                 return [
                    'name' => 'required|string|max:255',
                    'prenom'=> 'required|string|max:255',
                    'email'=> 'nullable',
                    'commune'=> 'required|string|max:255',
                    'zone_intervention'=> 'nullable',
                    'telephone'=> 'required',
                    'num_whattsap'=> 'nullable',
                    'adresse'=> 'required|string|max:255',
                    'speciality_id'=> 'required|exists:specialities,id',
                    'date_adhesion'=> 'required|date',
                    'photo'=> 'nullable',
                    'description'=> 'required|string|max:255',
                 ];
                 break ;
        }
    }
}
