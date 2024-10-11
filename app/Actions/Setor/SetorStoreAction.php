<?php

namespace App\Actions\Setor;

use App\DTO\Setor\SetorStoreDTO;
use App\Models\Setor;
use App\Repositories\Setor\SetorRepositoryInterface;

class SetorStoreAction
{
    public function __construct(
        protected SetorRepositoryInterface $repository
    ) { }

    public function exec(SetorStoreDTO $dto): Setor
    {
        return $this->repository->new($dto);
    }
}
