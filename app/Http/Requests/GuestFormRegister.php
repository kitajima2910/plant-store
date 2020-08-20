<?php
namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class GuestFormRegister extends FormRequest
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
            'phone' => 'required|regex:/^0[1-9]{1}[0-9]{8}$/',
            'address' => 'required',
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên chưa được nhập',
            'name.regex' => 'Tên không hợp lệ',
            'email.required' => 'Địa chỉ email chưa được nhập',
            'email.regex' => 'Địa chỉ email không đúng định dạng',
            'email.unique' => 'Địa chỉ email đã tồn tại',
            'password.required' => 'Mật khẩu chưa được nhập',
            'password_confirmation.required' => 'Mật khẩu xác nhận chưa được nhập',
            'password_confirmation.same' => 'Mật khẩu xác nhận không đúng',
            'phone.required' => 'Số điện thoại chưa được nhập',
            'phone.regex' => 'Số điện thoại chưa đúng định dạng',
            'address.required' => 'Địa chỉ chưa được nhập',
            
        ];
    }
}
