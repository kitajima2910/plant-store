<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminFormProduct extends FormRequest
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
            'name' => 'required|' . Rule::unique('products')->ignore($this->id),
            'price' => 'required|numeric|min:1000',
            'content' => 'required',
            'content_short' => 'required',
            'feature_image_path' => 'image|mimes:jpg,jpeg,png,bmp',
            'category_id' => 'required',
            'tags_name' => 'required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm chưa được nhập',
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'price.required' => 'Giá sản phẩm chưa được nhập',
            'price.numeric' => 'Giá sản phẩm phải là chữ số',
            'price.min' => 'Giá sản phẩm phải lớn hơn 1.000 đồng',
            'content.required' => 'Nội dung chưa được nhập',
            'content_short.required' => 'Nội dung chưa được nhập',
            'feature_image_path.mimes' => 'Ảnh phải có đuôi jpg, jpeg, png, bmp',
            'feature_image_path.image' => 'Tệp này không phải ảnh',
            'category_id.required' => 'Danh mục cha chưa được chọn',
            'tags_name.required' => 'Tags cho sản phẩm chưa được nhập',
        ];
    }

}
