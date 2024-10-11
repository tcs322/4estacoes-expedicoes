<?php

namespace App\Actions\Departamento;

use App\DTO\Departamento\DepartamentoStoreDTO;
use App\Models\Departamento;
use App\Repositories\Departamento\DepartamentoRepositoryInterface;

class DepartamentoStoreAction
{
    public function __construct(
        protected DepartamentoRepositoryInterface $repository
    ) { }

    public function exec(DepartamentoStoreDTO $dto): Departamento
    {
        return $this->repository->new($dto);
    }
}
