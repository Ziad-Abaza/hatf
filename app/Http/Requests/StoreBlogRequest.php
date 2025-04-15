<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'title_en'        => 'nullable|string|max:2000',
            'title_ar'        => 'required|string|max:2000',
            'descraption_en'        => 'nullable|string',
            'descraption_ar'        => 'required|string',
            'img'       => 'nullable|image|max:9000',
            
        ];
    }
}
