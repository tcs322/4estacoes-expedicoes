<?php

namespace App\Actions\PostoTrabalho;

use App\DTO\PostoTrabalho\PostoTrabalhoEditDTO;
use App\Models\PostoTrabalho;
use App\Repositories\PostoTrabalho\PostoTrabalhoRepositoryInterface;

class PostoTrabalhoEditAction {
    public function __construct(
        protected PostoTrabalhoRepositoryInterface $repository
    )
    { }

    public function exec(PostoTrabalhoEditDTO $dto): PostoTrabalho
    {
        return $this->repository->find($dto->uuid);
    }
}
