<?php

namespace App\Actions\Departamento;

use App\DTO\Departamento\DepartamentoDeleteDTO;
use App\Repositories\Departamento\DepartamentoRepositoryInterface;

class DepartamentoDeleteAction {
    public function __construct(
        protected DepartamentoRepositoryInterface $repository
    ) {}

    public function exec(DepartamentoDeleteDTO $dto): void
    {
        $this->repository->delete($dto->uuid);
    }   
}