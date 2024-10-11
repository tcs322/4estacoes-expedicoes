<?php

namespace App\Actions\Equipe;

use App\DTO\Equipe\EquipeShowDTO;
use App\Models\Equipe;
use App\Repositories\Equipe\EquipeRepositoryInterface;

class EquipeShowAction {
    public function __construct(
        protected EquipeRepositoryInterface $repository
    ) { }

    public function exec(EquipeShowDTO $dto): Equipe
    {
        return $this->repository->find($dto->uuid);
    }
}
