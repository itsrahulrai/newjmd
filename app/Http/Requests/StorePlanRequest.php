<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanRequest extends FormRequest
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
            'price' => 'nullable|numeric|min:0',
            'duration' => 'nullable|integer|min:1',
            'plan_code' => 'nullable|string|unique:plans,plan_code', // Nullable, unique within plans table
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Plan Name',
            'price' => 'Price',
        ];
    }
}
