<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
public function authorize()
{
    return true;
}

public function rules()
{
return [
    'name' => 'required',
    'price' => 'required | integer:/^[0-9]+$/ | max:10000',
    'season' => 'required',
    'description' => 'required | max:120',
    'image' => 'required | png | jpeg',
];
}

public function messages()
{
    return [
        'name.required' => '商品名を入力してください',
        'price.required' => '値段を入力してください',
        'price.integer' => '数値で入力してください',
        'price.max' => '0~10000円以内で入力してください',
        'season.required' => '季節を選択してください',
        'description.required' => '商品説明を入力してください',
        'description.max' => '120文字以内で入力してください',
        'image.required' => '商品画像を登録してください',
        'image.png.jpeg' => '「.png」または「.jpeg」形式でアップロードしてください',
    ];
}
}
