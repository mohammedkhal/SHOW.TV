<?php

namespace App\Http\Requests\V1\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'second_name' => 'required|max:255',
            'family_name' => 'required|max:255',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2024',
        ];
    }
}
