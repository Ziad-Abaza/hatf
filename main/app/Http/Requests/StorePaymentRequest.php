<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentRequest extends FormRequest
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

            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => [
                'required',
                'regex:/^(\+966|966|0)?5[0-9]{8}$/'
            ],
            'amount' => 'required|numeric|min:1',
            'expenses' => 'required|numeric|min:0',
            'service' => 'required|string',
            'invoice_number' => 'required|numeric',

        ];
    }
}
