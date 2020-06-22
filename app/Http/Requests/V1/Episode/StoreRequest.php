<?php

namespace App\Http\Requests\V1\Episode;

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
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'show_days' => 'required|max:255',
            'show_hours' => 'required|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2024',
        ];
    }
}
