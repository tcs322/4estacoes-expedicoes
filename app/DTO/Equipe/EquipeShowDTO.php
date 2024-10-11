<?php

namespace App\DTO\Equipe;

use App\Http\Requests\App\Equipe\EquipeShowRequest;

class EquipeShowDTO {
    public function __construct(
        public string $uuid
    )
    { }

    public static function makeFromRequest(EquipeShowRequest $request)
    {
        return new self(
            $request->uuid
        );
    }
}
