<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'max:255|min:3|regex:/^[a-z0-9-_@\.\']+[a-z0-9-_@\s\.\']*[a-z0-9-_@\.\']+$/i', //regex covered "required"
            'email' => 'required|email|unique:users,email',
            'mobile' => 'regex:/\+*[0-9]{8,}$/', //regex covered "min:8" regex covered "required"
            'sex' => 'required|in:male,female,other',
            'password' => 'required|confirmed|min:8'
        ];
    }
}
