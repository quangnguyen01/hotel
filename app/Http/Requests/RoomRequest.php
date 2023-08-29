<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        $rules =  [
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'images'=>'required',
            'category_id'=>'required',
            'status' => '',
            'room_content' => '',
        ];
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên.',
            'price.required'=>'Vui lòng nhập giá.',
            'description.required'=>'Vui lòng nhập mô tả.',
            'images.required'=>'Vui lòng chọn ảnh.',
            'images.jpg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'images.jpeg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'images.gif'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'images.svg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'images.max'=>'Vui lòng chọn ảnh kích thước nhỏ hơn.',
            'category_id.required'=>'Vui lòng chọn loại phòng.'
        ];
    }
}
