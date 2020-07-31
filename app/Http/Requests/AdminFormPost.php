<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AdminFormPost extends FormRequest
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
            'name' => 'required|'  . Rule::unique('posts')->ignore($this->id),
            'content' => 'required',
            'feature_image_path' => 'mimes:jpg,jpeg,png,bmp',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên chưa được nhập',
            'name.unique' => 'Tên bài viết đã tồn tại',
            'content.required' => 'Nội dung chưa được nhập',
            'feature_image_path.mimes' => 'Ảnh phải có đuôi jpg, jpeg, png, bmp',
           
        ];
    }
}
