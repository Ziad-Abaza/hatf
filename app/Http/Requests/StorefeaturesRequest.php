<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorefeaturesRequest extends FormRequest
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
            'title' => 'required|string|max:2000',
            'description' => 'required|string|max:2000',
            'service_id' => 'nullable|exists:services,id',
            'image' => 'nullable|image|max:9000',
        ];
    }
}
