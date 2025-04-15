<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
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
            'name' => 'required|string|max:2000',
            'job_title' => 'nullable|string|max:2000',
            'content' => 'required|string',
            'service_id' => 'nullable|exists:services,id',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|max:9000',
        ];
    }
}
