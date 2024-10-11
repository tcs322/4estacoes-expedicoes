<?php

namespace App\Actions\Setor;

use App\DTO\Setor\SetorDeleteDTO;
use App\Repositories\Setor\SetorRepositoryInterface;

class SetorDeleteAction {
    public function __construct(
        protected SetorRepositoryInterface $repository
    ) {}

    public function exec(SetorDeleteDTO $dto): void
    {
        $this->repository->delete($dto->uuid);
    }
}