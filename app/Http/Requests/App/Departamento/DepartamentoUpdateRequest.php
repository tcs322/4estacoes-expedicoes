<?php

namespace App\Http\Requests\App\Departamento;

use Illuminate\Foundation\Http\FormRequest;

class DepartamentoUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "uuid" => [
                "uuid", "exists:departamentos,uuid"
            ],
            "nome" => [
                "required", "min:5", "max:254",
            ],
            "postos_trabalho_uuid" => [
                "required", "exists:postos_trabalho,uuid"
            ],
            "setores_uuid" => [
                "required", "exists:setores,uuid"
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     *
     */
}
