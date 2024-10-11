<?php

namespace App\DTO\Setor;

use App\Http\Requests\App\Setor\SetorStoreRequest;

class SetorStoreDTO
{
    public function __construct(
        public string $nome,
        public string $postos_trabalho_uuid
    ) {}

    public static function makeFromRequest(SetorStoreRequest $request): self 
    {
        return new self(
            $request->nome,
            $request->postos_trabalho_uuid
        );
    }
}
