<?php

namespace App\DTO\Departamento;

use App\Http\Requests\App\Departamento\DepartamentoUpdateRequest;

class DepartamentoUpdateDTO
{
    public function __construct(
        public string $uuid,
        public string $nome,
        public string $postos_trabalho_uuid,
        public string $setores_uuid,
    ) {}

    public static function makeFromRequest(DepartamentoUpdateRequest $request): self
    {
        return new self(
            $request->uuid,
            $request->nome,
            $request->postos_trabalho_uuid,
            $request->setores_uuid
        );
    }
}
