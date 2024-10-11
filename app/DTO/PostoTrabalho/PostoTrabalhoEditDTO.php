<?php

namespace App\DTO\PostoTrabalho;

use App\Http\Requests\App\PostoTrabalho\PostoTrabalhoEditRequest;

class PostoTrabalhoEditDTO {
    public function __construct(
        public string $uuid
    )
    { }

    public static function makeFromRequest(PostoTrabalhoEditRequest $request)
    {
        return new self(
            $request->uuid
        );
    }
}
