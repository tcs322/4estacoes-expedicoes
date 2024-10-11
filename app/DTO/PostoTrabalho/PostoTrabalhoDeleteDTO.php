<?php

namespace App\DTO\PostoTrabalho;

use App\Http\Requests\App\PostoTrabalho\PostoTrabalhoDeleteRequest;

class PostoTrabalhoDeleteDTO {
    public function __construct(
        public string $uuid
    )
    { }

    public static function makeFromRequest(PostoTrabalhoDeleteRequest $request)
    {
        return new self(
            $request->uuid
        );
    }
}
