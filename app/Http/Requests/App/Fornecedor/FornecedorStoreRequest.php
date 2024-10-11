<?php

namespace App\Http\Requests\App\Fornecedor;

use App\Enums\PortePessoaJuridicaEnum;
use App\Enums\TipoDocumentoPessoaJuridicaEnum;
use BenSampo\Enum\Rules\EnumKey;
use Illuminate\Foundation\Http\FormRequest;

class FornecedorStoreRequest extends FormRequest
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
            "nome_fantasia" => [
                "required", "min:5", "max:254"
            ],
            "razao_social" => [
                "required", "min:5", "max:254"
            ],
            "porte" => [
                "required", new EnumKey(PortePessoaJuridicaEnum::class),
            ],
            "tipo_documento" => [
                "required", new EnumKey(TipoDocumentoPessoaJuridicaEnum::class),
            ],
            "documento" => [
                "required", "min:5", "max:25"
            ]
        ];
    }
}
