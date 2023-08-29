<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'adult'=>'required',
            'child'=>'required',
            'check_in_date'=>'required',
            'check_in_time'=>'required',
            'check_out_date'=>'required',
            'check_out_time'=>'required',
            'special_request'=> '',
            'room_id' => '',
            'route' => '',
            'price' => '',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên.',
            'email.required'=>'Vui lòng nhập email.',
            'phone.required'=>'Vui lòng nhập số điện thoại.',
            'adult.required'=>'Vui lòng nhập số lượng người lớn.',
            'child.required'=>'Vui lòng nhập số lượng trẻ em.',
            'check_in_date.required'=>'Vui lòng nhập ngày nhận phòng.',
            'check_in_time.required'=>'Vui lòng nhập giờ nhận phòng.',
            'check_out_date.required'=>'Vui lòng nhập ngày trả phòng.',
            'check_out_time.required'=>'Vui lòng nhập giờ trả phòng.',
        ];
    }
}
