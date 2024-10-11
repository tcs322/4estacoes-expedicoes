<?php

namespace App\DTO\Equipe;

use App\Enums\SituacaoEquipeEnum;
use App\Http\Requests\App\Equipe\EquipeStoreRequest;

class EquipeStoreDTO {
    public function __construct(
        public string $nome,
        public string $situacao
    ) {}

    public static function makeFromRequest(EquipeStoreRequest $request): self
    {
        return new self(
            $request->nome,
            SituacaoEquipeEnum::getValue(SituacaoEquipeEnum::getKey((int)$request->situacao))
        );
    }
}
