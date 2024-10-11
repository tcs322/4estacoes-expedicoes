<?php

namespace App\DTO\Cargo;

use App\DTO\BaseDTO;
use App\Enums\SituacaoCargoEnum;
use App\Http\Requests\App\Cargo\CargoUpdateRequest;

class CargoUpdateDTO extends BaseDTO
{
    public function __construct(
        public string $uuid,
        public string $nome,
        public string $situacao,
    ){ }

    public static function makeFromRequest(CargoUpdateRequest $request)
    {
        return new self(
            $request->uuid,
            $request->nome,
            SituacaoCargoEnum::getValue(SituacaoCargoEnum::getKey((int)$request->situacao))
        );
    }
}
