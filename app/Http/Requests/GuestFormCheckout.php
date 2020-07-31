<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestFormCheckout extends FormRequest
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
            'phone' => 'required|regex:/^[0-9]{10}$/',
            'address' => 'required',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email chưa được nhập',
            'email.regex' => 'Email không đúng định dạng',
            'phone.required' => 'Điện thoại chưa được nhập',
            'phone.regex' => 'Điện thoại không đúng định dạng',
            'address.required' => 'Địa chỉ chưa được nhập',
        ];
    }
}
