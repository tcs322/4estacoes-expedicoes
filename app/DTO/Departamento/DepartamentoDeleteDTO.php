<?php

namespace App\DTO\Departamento;

use App\Http\Requests\App\Departamento\DepartamentoDeleteRequest;

class DepartamentoDeleteDTO {
    public function __construct(
        public string $uuid
    ) {}

    public static function makeFromRequest(DepartamentoDeleteRequest $request): self
    {
        return new self(
            $request->uuid
        );
    }
}