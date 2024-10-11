<?php
namespace App\Actions\Setor;

use App\DTO\Setor\SetorUpdateDTO;
use App\Models\Setor;
use App\Repositories\Setor\SetorRepositoryInterface;

class SetorUpdateAction
{
    public function __construct(
        protected SetorRepositoryInterface $repository
    ) {}

    public function exec(SetorUpdateDTO $dto): Setor
    {
        return $this->repository->update($dto);
    }
}
