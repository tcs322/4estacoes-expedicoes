<?php

namespace App\DTO\Setor;

use App\Http\Requests\App\Setor\SetorUpdateRequest;

class SetorUpdateDTO
{
    public function __construct(
        public string $uuid,
        public string $nome,
        public string $postos_trabalho_uuid
    ) {}

    public static function makeFromRequest(SetorUpdateRequest $request): self
    {
        return new self(
            $request->uuid,
            $request->nome,
            $request->postos_trabalho_uuid,
        );
    }
}
