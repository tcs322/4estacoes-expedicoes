<?php

namespace App\Http\Requests\App\PostoTrabalho;

use Illuminate\Foundation\Http\FormRequest;

class PostoTrabalhoUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "uuid" => [
                "uuid", "exists:servidores,uuid"
            ],
            "nome" => [
                "required", "min:5", "max:254",
            ],
        ];
    }
}
