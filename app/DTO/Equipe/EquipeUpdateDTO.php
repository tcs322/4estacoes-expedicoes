<?php

namespace App\DTO\Equipe;

use App\DTO\BaseDTO;
use App\Enums\SituacaoEquipeEnum;
use App\Http\Requests\App\Equipe\EquipeUpdateRequest;

class EquipeUpdateDTO extends BaseDTO
{
    public function __construct(
        public string $uuid,
        public string $nome,
        public string $situacao,
    ){ }

    public static function makeFromRequest(EquipeUpdateRequest $request)
    {
        return new self(
            $request->uuid,
            $request->nome,
            SituacaoEquipeEnum::getValue(SituacaoEquipeEnum::getKey((int)$request->situacao))
        );
    }
}
