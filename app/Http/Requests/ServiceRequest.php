<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            "name" => ['required', 'min:5', 'max:255'],
            "description" => ['required', 'min:10', 'max:255'],
            "amount" => ['required', 'numeric', 'min:1', 'max:10000'],
            "image" => ['sometimes', 'image', 'max:500']
        ];
    }

    // public function messages()
    // {
    //     return [
    //         "name.min" => "Your name is too short.",
    //         "name.max" => "Your name is too long"
    //     ];
    // }

    // public function attributes()
    // {
    //     return [
    //         "name" => "wodin",
    //         "description" => "nky3ky3m"
    //     ];
    // }
}
