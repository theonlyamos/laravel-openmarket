<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'unique:stores'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'rpassword' => 'required',
            'address' => 'required',
            'location' => 'required',
            'region' => 'required',
            'city' => 'required',
            'postal' => 'required',
            'categories' => 'required'
            //
        ];
    }
}
