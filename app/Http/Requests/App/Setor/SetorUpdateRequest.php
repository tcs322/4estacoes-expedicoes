<?php

namespace App\Http\Requests\App\Setor;

use Illuminate\Foundation\Http\FormRequest;

class SetorUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "uuid" => [
                "uuid", "exists:setores,uuid"
            ],
            "nome" => [
                "required", "min:5", "max:254",
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
