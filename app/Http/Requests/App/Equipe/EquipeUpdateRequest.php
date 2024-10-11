<?php

namespace App\Http\Requests\App\Equipe;

use App\Enums\SituacaoEquipeEnum;
use App\Repositories\Equipe\EquipeRepositoryInterface;
use Exception;
use Illuminate\Foundation\Http\FormRequest;

class EquipeUpdateRequest extends FormRequest
{
    public function __construct(
        protected EquipeRepositoryInterface $repository
    )
    { }
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
            "uuid" => ["uuid", "exists:equipes,uuid"],
            "nome" => [
                "required", "min:5", "max:254"
            ],
            "situacao" => [
                "required"
            ],
        ];
    }

    public function passedValidation()
    {
        if ($this->situacao == SituacaoEquipeEnum::INATIVO) {
            $equipe = $this->repository->find($this->uuid);
            if ($equipe->servidores->count() > 0) {
                throw new Exception("Este objeto possui relacionamento ativo, por isso não pode ser inativado");
            }
        }
    }
}
