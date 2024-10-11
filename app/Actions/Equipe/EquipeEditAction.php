<?php

namespace App\Actions\Equipe;

use App\DTO\Equipe\EquipeEditDTO;
use App\Models\Equipe;
use App\Repositories\Equipe\EquipeRepositoryInterface;

class EquipeEditAction {
    public function __construct(
        protected EquipeRepositoryInterface $repository
    )
    { }

    public function exec(EquipeEditDTO $dto): Equipe
    {
        return $this->repository->find($dto->uuid);
    }
}
