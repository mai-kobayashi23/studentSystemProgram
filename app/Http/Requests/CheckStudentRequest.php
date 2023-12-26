<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckStudentRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required|address',
            'img_path' => 'required|img_path',
        ];
    }

    public function messages()
    {
        return [
            "required" => "必須項目です。",
            "address" => "住所を入力してください。",
            "img_path" => "顔写真を選択してください。",
        ];
    }
}
