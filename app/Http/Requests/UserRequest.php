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
        return [
            'email'=>'email|required',
            'mobile'=>'required|regex:/^[+][0-9]{12}$/m',
        ];
    }
    public function messages()
    {
        return [
        'mobile.regex' => 'mobile must be in format like +201234567890',
        ];
    }
}
