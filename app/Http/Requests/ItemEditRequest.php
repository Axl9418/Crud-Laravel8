<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemEditRequest extends FormRequest
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
        //$item = $this->route('items');
        return [
            'code'=>'required|string|max:10',
            'description'=>'required|string|max:50',
            'quantity'=>'required|numeric|min:0|not_in:0',
            'price'=>'required|numeric|between:1,999.99'
        ];
    }
}
