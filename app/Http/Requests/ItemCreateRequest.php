<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemCreateRequest extends FormRequest
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
            'code'=>'required|string|max:10|unique:items',
            'description'=>'required|string|max:50|unique:items',
            'quantity'=>'required|numeric|min:0|not_in:0',
            'price'=>'required|numeric|between:1,999.99'
        ];
    }
}
