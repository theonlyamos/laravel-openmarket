<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeProductsPost extends FormRequest
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
            'store_id' => 'required',
            'name'      => ['required', 'unique:products'],
            'category' => 'required',
            'price' => 'required',
            'description' => ['required', 'min:30'],
            'keywords' => 'required',
            'features' => 'required'
        ];
    }
}