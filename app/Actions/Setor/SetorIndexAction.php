<?php

namespace App\Actions\Setor;

use App\Repositories\Setor\SetorRepositoryInterface;
use App\Repositories\Interfaces\PaginationInterface;

class SetorIndexAction
{
    public function __construct(
        protected SetorRepositoryInterface $repository
    ) { }

    public function exec(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        return $this->repository->paginate(page: $page,  totalPerPage: $totalPerPage, filter: $filter);
    }
}
