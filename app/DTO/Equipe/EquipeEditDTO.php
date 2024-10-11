<?php

namespace App\DTO\Equipe;

use App\Http\Requests\App\Equipe\EquipeEditRequest;

class EquipeEditDTO {
    public function __construct(
        public string $uuid
    )
    { }

    public static function makeFromRequest(EquipeEditRequest $request)
    {
        return new self(
            $request->uuid
        );
    }
}
