<?php

namespace App\Actions\PostoTrabalho;

use App\DTO\PostoTrabalho\PostoTrabalhoStoreDTO;
use App\Models\PostoTrabalho;
use App\Repositories\PostoTrabalho\PostoTrabalhoRepositoryInterface;

class PostoTrabalhoStoreAction {


    public function __construct(
        protected PostoTrabalhoRepositoryInterface $repository
    ) { }

    public function exec(PostoTrabalhoStoreDTO $dto): PostoTrabalho
    {
        return $this->repository->new($dto);
    }
}
