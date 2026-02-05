<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:150',
            'description' => 'sometimes|nullable|string',
            'price' => 'sometimes|numeric|min:0',
            'currency_id' => 'sometimes|exists:currencies,id',
            'tax_cost' => 'sometimes|numeric|min:0',
            'manufacturing_cost' => 'sometimes|numeric|min:0',
        ];
    }
}
