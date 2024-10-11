<?php

namespace App\DTO\Setor;

use App\Http\Requests\App\Setor\SetorEditRequest;

class SetorEditDTO {
    public function __construct(
        public string $uuid
    ) {}

    public static function makeFromRequest(SetorEditRequest $request): self
    {
        return new self(
            $request->uuid
        );
    }
}