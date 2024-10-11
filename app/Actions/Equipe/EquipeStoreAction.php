<?php

namespace App\Actions\Equipe;

use App\DTO\Equipe\EquipeStoreDTO;
use App\Models\Equipe;
use App\Repositories\Equipe\EquipeRepositoryInterface;

class EquipeStoreAction {


    public function __construct(
        protected EquipeRepositoryInterface $repository
    ) { }

    public function exec(EquipeStoreDTO $dto): Equipe
    {
        return $this->repository->new($dto);
    }
}
