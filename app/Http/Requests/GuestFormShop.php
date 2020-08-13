<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestFormShop extends FormRequest
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
            'quantity' => 'required|numeric|min:1|max:100'
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
            'quantity.required' => 'Số lượng chưa được nhập',
            'quantity.numeric' => 'Giá trị phải là số',
            'quantity.min' => 'Giá trị phải lớn hơn hoặc bằng 1',
            'quantity.max' => 'Giá trị phải bé hơn hoặc bằng 100',
        ];
    }
}
