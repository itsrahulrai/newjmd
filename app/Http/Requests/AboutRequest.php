<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'image1' => 'required|image|max:2048',
            'image2' => 'required|image|max:2048',
            'welcome_title' => 'required|string|max:255', 
            'welcome_description' => 'required|string', 
            'link_text' => 'required|string|max:255', 
            'link_url' => 'required|url',
            'additional_info' => 'required|string', 
            'status' => 'required|in:active,inactive',
        ];
    }

   
}
