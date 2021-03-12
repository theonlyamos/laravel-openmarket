<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guard('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            'name'      => ['required', 'unique:products'],
            'category' => 'required',
            'description' => ['required', 'min:30'],
            'keywords' => 'required',
            'features' => 'required'
=======
            'name'          => ['required'],
            'category'      => 'required',
            'description'   => ['required', 'min:30'],
            'keywords'      => 'required',
            'brand'         => ['present'],
            'price'         => ['nullable'],
            'colors'        => ['nullable'],
            'width'         => ['nullable'],
            'height'        => ['nullable'],
            'breadth'       => ['nullable'],
            'weight'        => ['nullable'],
            'volume'        => ['nullable'],
            'sizes'         => ['nullable']
>>>>>>> product
        ];
    }
}
