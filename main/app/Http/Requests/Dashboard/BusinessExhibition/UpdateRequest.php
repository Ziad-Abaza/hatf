<?php

namespace App\Http\Requests\Dashboard\BusinessExhibition;

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
            'name'  => 'required|string|max:255',
            'desc'  => 'required|string',
            'image' => 'nullable|image|file|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
