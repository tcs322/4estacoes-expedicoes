<?php

namespace App\Actions\Setor;

use App\DTO\Setor\SetorEditDTO;
use App\Models\Setor;
use App\Repositories\Setor\SetorRepositoryInterface;

class SetorEditAction {
    public function __construct(
        protected SetorRepositoryInterface $repository
    ) {}

    public function exec(SetorEditDTO $dto): Setor
    {
        return $this->repository->find($dto->uuid);
    }
}