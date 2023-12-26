<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploader extends Model
{
    protected $fillable = ['user'];

    public function rules()
    {
        return [
            'user' => 'required',
            'addresses' => 'required|address',
            'thum' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            "required" => "必須項目です。",
            "address" => "必須項目です。",
            "image" => "指定されたファイルが画像(jpg、png、bmp、gif、svg)ではありません。",
        ];
    }
}
