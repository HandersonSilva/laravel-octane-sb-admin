<?php

namespace App\Http\Requests\User;

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
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name'               => "required|string|min:2|max:150",
                    'email'              => 'required|email|max:150|unique:users',
                    'password'           => 'required|min:6|confirmed'
                ];
            }
            case 'PUT': {
                $rules = [
                    'name'        => 'required|string|min:2|max:150',
                    'email'       => "required|email|max:150|unique:users,email,{$this->route('id')}",
                ];

                if ($this->password) {
                    $rules['password'] = 'required|min:6|confirmed';
                }

//                if (isset($this->status)) {
//                    $rules['status'] = 'required|boolean';
//                }

                return $rules;
            }
            default:break;
        }
    }
}
