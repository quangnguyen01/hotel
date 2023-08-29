<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $rules = [
            'name' => ['required'],
            'password' => ['required', 'min:6'],
            'email' => ['required', Rule::unique('users')],
            'phone_number' => ['required', Rule::unique('users')],
            'role' => ['nullable'],
            'avatar' => [''],
        ];
        if(request()->isMethod('put')){
            $rules['email'] = [Rule::unique('users')->ignore($this->id)];
            $rules['phone_number'] = [Rule::unique('users')->ignore($this->id)];
            $rules['role'] = ['nullable'];
            $rules['password'] = ['min:6'];
        }
        return $rules;
    }
    public function messages()
    {
        $messages = [
            'name.required' => 'vui lòng nhập tên ',
            'email.required'=>'vui lòng nhập email',
            'phone_number.required'=>'vui lòng nhập số điện thoại',
            'password.required'=>'vui lòng nhập password',
            're-password.required'=>'vui lòng nhập lại password',
        ];
        return $messages;

    }
}
