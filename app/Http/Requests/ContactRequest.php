<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'subject' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'name.required' => 'Vui lòng nhập tên',
          'email.required' => 'Vui lòng nhập mail',
          'phone.required' => 'Vui lòng nhập số điện thoại',
          'message.required' => 'Vui lòng nhập lời nhắn',
          'subject.required' => 'Vui lòng nhập vấn đề',
        ];
    }
}
