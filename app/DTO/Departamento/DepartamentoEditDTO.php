<?php

namespace App\DTO\Departamento;

use App\Http\Requests\App\Departamento\DepartamentoEditRequest;

class DepartamentoEditDTO {
    public function __construct(
        public string $uuid
    ) {}

    public static function makeFromRequest(DepartamentoEditRequest $request): self
    {
        return new self(
            $request->uuid
        );
    }
}