<?php

namespace App\Actions\PostoTrabalho;

use App\DTO\PostoTrabalho\PostoTrabalhoDeleteDTO;
use App\Repositories\PostoTrabalho\PostoTrabalhoRepositoryInterface;

class PostoTrabalhoDeleteAction {
    public function __construct(
        protected PostoTrabalhoRepositoryInterface $repository
    )
    { }

    public function exec(PostoTrabalhoDeleteDTO $dto): void
    {
        $this->repository->delete($dto->uuid);
    }
}
