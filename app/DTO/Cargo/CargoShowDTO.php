<?php

namespace App\DTO\Cargo;

use App\Http\Requests\App\Cargo\CargoShowRequest;

class CargoShowDTO {
    public function __construct(
        public string $uuid
    )
    { }

    public static function makeFromRequest(CargoShowRequest $request)
    {
        return new self(
            $request->uuid
        );
    }
}