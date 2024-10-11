<?php

namespace App\Actions\Departamento;

use App\Repositories\Departamento\DepartamentoRepositoryInterface;
use App\Repositories\Interfaces\PaginationInterface;

class DepartamentoIndexAction
{
    public function __construct(
        protected DepartamentoRepositoryInterface $repository
    ) { }

    public function exec(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        return $this->repository->paginate(page: $page,  totalPerPage: $totalPerPage, filter: $filter);
    }
}
