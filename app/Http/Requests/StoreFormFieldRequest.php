<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormFieldRequest extends FormRequest
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
            'label' => 'required|string|max:255',
            'type' => 'required|string',
            'name' => 'nullable|string|max:255',
            'value' => 'nullable|string|max:255',
            'display_text' => 'nullable|string',
            'options' => 'nullable|string',
            'placeholder' => 'nullable|string|max:255',
            'default_value' => 'nullable|string|max:255',
            'file_type' => 'nullable|string|max:255',
            'max_file_size' => 'nullable|integer',
            'required' => 'nullable|boolean',
        ];
    }
}
