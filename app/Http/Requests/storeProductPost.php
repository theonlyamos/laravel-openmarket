<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class storeProductPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guard('store')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'price'         => 'required',
            'quantity'      => 'present',
            'size'          => 'nullable',
            'color'         => 'nullable',
            'store_id'      => 'nullable',
            'product_id'    => 'required',
        ];
    }
}
