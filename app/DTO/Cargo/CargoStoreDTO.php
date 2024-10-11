<?php

namespace App\DTO\Cargo;

use App\Enums\SituacaoCargoEnum;
use App\Http\Requests\App\Cargo\CargoStoreRequest;

class CargoStoreDTO {
    public function __construct(
        public string $nome,
        public string $situacao
    ) {}

    public static function makeFromRequest(CargoStoreRequest $request): self
    {
        return new self(
            $request->nome,
            SituacaoCargoEnum::getValue(SituacaoCargoEnum::getKey((int)$request->situacao))
        );
    }
}