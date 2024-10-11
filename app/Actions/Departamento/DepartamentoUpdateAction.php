<?php
namespace App\Actions\Departamento;

use App\DTO\Departamento\DepartamentoUpdateDTO;
use App\Models\Departamento;
use App\Repositories\Departamento\DepartamentoRepositoryInterface;

class DepartamentoUpdateAction
{
    public function __construct(
        protected DepartamentoRepositoryInterface $repository
    ) {}

    public function exec(DepartamentoUpdateDTO $dto): Departamento
    {
        return $this->repository->update($dto);
    }
}
