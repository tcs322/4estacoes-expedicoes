<?php

namespace App\Http\Requests\App\Setor;

use Illuminate\Foundation\Http\FormRequest;

class SetorStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "nome" => [
                "required", "min:5", "max:254"
            ],
            "postos_trabalho_uuid" => [
                "required", "exists:postos_trabalho,uuid"
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * 
     */
}
