<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestFormLogin extends FormRequest
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
            'email' => 'required|regex:/^[\w]{2,}@[\w]{2,}(\.[\w]{2,}){1,2}$/',
            'password' => 'required'
        ];
    }

    /**
     * Get the validation messages apply to the request
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email chưa được nhập',
            'email.regex' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu chưa được nhập',
        ];
    }
}
