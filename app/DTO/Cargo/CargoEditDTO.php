<?php

namespace App\DTO\Cargo;

use App\Http\Requests\App\Cargo\CargoEditRequest;

class CargoEditDTO {
    public function __construct(
        public string $uuid
    )
    { }

    public static function makeFromRequest(CargoEditRequest $request)
    {
        return new self(
            $request->uuid
        );
    }
}