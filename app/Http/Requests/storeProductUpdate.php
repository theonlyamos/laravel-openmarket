<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class storeProductUpdate extends FormRequest
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
            'name'      => ['string', 'required', 'max:255'],
            'category' => ['string', 'required', 'max:255'],
            'price' => 'required',
            'description' => ['string', 'required', 'min:30'],
            'keywords' => 'string|required',
            'features' => 'string|required'
        ];
    }
}
