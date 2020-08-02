<?php
namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class AdminFormRegister extends FormRequest
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
            'password' => 'required|' . Rule::unique('users')->ignore($this->id),
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.regex' => 'Tên không hợp lệ',
            'email.required' => 'Địa chỉ email chưa được nhập',
            'email.regex' => 'Địa chỉ email không đúng định dạng',
            'email.unique' => 'Địa chỉ email đã tồn tại',
            'password.required' => 'Mật khẩu chưa được nhập',
            'name.confirmed' => 'Tên chưa được nhập',
            'phone.confirmed' => 'Số điện thoại chưa được nhập',
            'address.confirmed' => 'Địa chỉ chưa được nhập'
        ];
    }
}
