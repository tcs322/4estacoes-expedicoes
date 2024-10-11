<?php

namespace App\Actions\PostoTrabalho;

use App\Repositories\PostoTrabalho\PostoTrabalhoRepositoryInterface;

class PostoTrabalhoCreateAction
{
    public function __construct(
        protected PostoTrabalhoRepositoryInterface $itemPostoTrabalhoRepositoryInterface
    ) { }

    public function exec(): array
    {
        return [];
    }
}
