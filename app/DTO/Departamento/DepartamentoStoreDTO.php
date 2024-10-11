<?php

namespace App\DTO\Departamento;

use App\Http\Requests\App\Departamento\DepartamentoStoreRequest;

class DepartamentoStoreDTO
{
    public function __construct(
        public string $nome,
        public string $postos_trabalho_uuid,
        public string $setores_uuid
    ) {}

    public static function makeFromRequest(DepartamentoStoreRequest $request): self
    {
        return new self(
            $request->nome,
            $request->postos_trabalho_uuid,
            $request->setores_uuid,
        );
    }
}
