<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                    'email' => 'required|string|email|unique:users,email',
                    'role_id' => 'required|exists:roles,id',
                    'password' => 'required|confirmed',
                ];
                break ;

                case 'PATCH' :
                case 'PUT':
                 return [
                    'name' => 'required|string|max:255',
                    'email' => 'required|email',
                    'role_id' => 'required|exists:roles,id',
                    'password' => 'required|confirmed',
                 ];
                 break ;
        }

    }
}
