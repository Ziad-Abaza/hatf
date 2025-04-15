<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePackageRequest extends FormRequest
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
            'image'  => 'required|image|file|mimes:jpeg,png,jpg,gif,jpg|max:2048',
            'number'  => 'required|string|max:255',
            'order'  => 'required|string|max:255',
            'availability' => 'nullable|in:available,soon',
        ];
    }
}
