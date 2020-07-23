<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminFromProduct extends FormRequest
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
            'feature_image_path' => 'required',
            'image_path' => 'required',
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
            'feature_image_path.required' => 'Ảnh đại diện chưa được chọn',
            'image_path.required' => 'Ảnh chi tiết chưa được chọn',
            'category_id.required' => 'Danh mục cha chưa được chọn',
            'tags_name.required' => 'Tags cho sản phẩm chưa được nhập',
        ];
    }

}
