<?php

namespace App\DTO\Setor;

use App\Http\Requests\App\Setor\SetorDeleteRequest;

class SetorDeleteDTO {
    public function __construct(
        public string $uuid
    ) {}

    public static function makeFromRequest(SetorDeleteRequest $request)
    {
        return new self(
            $request->uuid
        );
    }
}