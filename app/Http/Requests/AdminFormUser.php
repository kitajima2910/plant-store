<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AdminFormUser extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-z ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+$/',
            'email' => 'required|regex:/^[\w]{2,}@[\w]{2,}(\.[\w]{2,}){1,2}$/|'. Rule::unique('users')->ignore($this->id),
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'phone' => 'required|regex:/^0[1-9]{1}[0-9]{8}$/',
            'address' => 'required',

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
            'name.required' => 'Tên chưa được nhập',
            'name.regex' => 'Tên không đúng định dạng',
            'email.required' => 'Email chưa được nhập',
            'email.regex' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu chưa được nhập',
            'password_confirmation.required' => 'Mật khẩu xác nhận chưa được nhập',
            'password_confirmation.same' => 'Mật khẩu xác nhận không đúng',
            'address.required' => 'Địa chỉ chưa được nhập',
            'phone.required' => 'Số điện thoại chưa được nhập',
            'phone.regex' => 'Số điện thoại không hợp lệ',
        ];
    }
}