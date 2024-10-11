<?php

namespace App\Actions\Equipe;

use App\DTO\Equipe\EquipeUpdateDTO;
use App\Models\Equipe;
use App\Repositories\Equipe\EquipeRepositoryInterface;

class EquipeUpdateAction {

    public function __construct(
        protected EquipeRepositoryInterface $repository
    )
    { }

    public function exec(EquipeUpdateDTO $dto): Equipe
    {
        return $this->repository->update($dto);
    }

}
