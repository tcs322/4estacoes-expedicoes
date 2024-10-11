<?php

namespace App\Actions\Departamento;

use App\DTO\Departamento\DepartamentoEditDTO;
use App\Models\Departamento;
use App\Repositories\Departamento\DepartamentoRepositoryInterface;

class DepartamentoEditAction {
    public function __construct(
        protected DepartamentoRepositoryInterface $repository
    )
    { }

    public function exec(DepartamentoEditDTO $dto): Departamento
    {
        return $this->repository->find($dto->uuid);
    }
}
