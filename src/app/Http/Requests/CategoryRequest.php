<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        'name'     => 'required|string',
        'name1'    => 'required|string',
        'gender'   => 'required',
        'phone'    => 'required|numeric|digits_between:10,11',
        'address'  => 'required',
        'building' => 'required',
        'content'  => 'required|string|min:0|max:120',
        'content1' => 'required|string|min:0|max:120',
    ];
}

public function messages()
{
    return [
        'name.required'     => '苗字を入力してください',
        'name1.required'    => '名を入力してください',
        'gender.required'   => '性別を入力してください',
        'phone.required'    => '電話番号を入力してください',
        'address.required'  => '住所を入力してください',
        'building.required' => '建物名を入力してください',
        'content.required'  => 'お問い合わせの種類を選択してください',
        'content1.required' => 'お問い合わせ内容を入力してください',
    ];
}
}