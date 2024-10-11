<?php

namespace App\DTO\PostoTrabalho;

use App\Http\Requests\App\PostoTrabalho\PostoTrabalhoStoreRequest;

class PostoTrabalhoStoreDTO
{
    public function __construct(
        public string $nome,
    ) {}

    public static function makeFromRequest(PostoTrabalhoStoreRequest $request): self
    {
        return new self(
            $request->nome,
        );
    }
}
