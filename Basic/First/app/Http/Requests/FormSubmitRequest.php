<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormSubmitRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required','string'],
            'email' => ['required','email'],
            'password' => ['required','confirmed'],
            'number' => ['required'],
            'file' => ['required','mimes:jpg,png,jpeg'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field e value dite hobe',
            'email.required' => 'Email field Must not be empty',
            // 'name.required' => 'Name field e value dite hobe',
        ];
    }
}
