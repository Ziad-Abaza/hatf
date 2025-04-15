<?php

namespace App\Http\Requests\Dashboard\Section;

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
            'header'           => 'nullable|image|file|mimes:jpeg,png,jpg,gif',
            'about'            => 'nullable|image|file|mimes:jpeg,png,jpg,gif',
            'services'         => 'nullable|image|file|mimes:jpeg,png,jpg,gif',
            'business_show'    => 'nullable|image|file|mimes:jpeg,png,jpg,gif',
            'success_partners' => 'nullable|image|file|mimes:jpeg,png,jpg,gif',
        ];
    }
}
