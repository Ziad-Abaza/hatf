<?php

namespace App\Http\Requests\Dashboard\Footer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'  => 'required|email',
            'phone'  => 'required|numeric',
            'youtube'  => 'required|url',
            'facebook' => 'required|url',
            'twitter'  => 'required|url',
        ];
    }
}
