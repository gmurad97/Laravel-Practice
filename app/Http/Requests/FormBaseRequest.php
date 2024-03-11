<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormBaseRequest extends FormRequest
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
            "first_name" => "min:5|max:10|required",
            "last_name" => "min:5|max:10|required",
        ];
    }
}
