<?php

namespace App\DTO\PostoTrabalho;

use App\DTO\BaseDTO;
use App\Http\Requests\App\PostoTrabalho\PostoTrabalhoUpdateRequest;

class PostoTrabalhoUpdateDTO extends BaseDTO
{
    public function __construct(
        public string $uuid,
        public string $nome,
    ){ }

    public static function makeFromRequest(PostoTrabalhoUpdateRequest $request)
    {
        return new self(
            $request->uuid,
            $request->nome,
        );
    }
}
