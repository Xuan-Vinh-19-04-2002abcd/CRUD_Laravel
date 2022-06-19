<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class demoformrequest extends FormRequest
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
            'name' => 'required|min:8',
            'price' => 'numeric',
            'img' => "required"
        ];
    }
    public function messages()
    {
        return
            [
                'name.required' => 'Bắt buộc phải nhập tên',
                'name.min' => "Vui long nhập tên trên :min kí tự",
                'price.numeric' => 'Không thấy giá là phải nhập số à',
                'img.required' => 'Bắt buộn phải chọn hình ảnh'
            ];
    }
}
