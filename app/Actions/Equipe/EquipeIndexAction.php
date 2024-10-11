<?php

namespace App\Actions\Equipe;

use App\Repositories\Equipe\EquipeRepositoryInterface;
use App\Repositories\Interfaces\PaginationInterface;

class EquipeIndexAction
{
    public function __construct(
        protected EquipeRepositoryInterface $repository
    ) { }

    public function exec(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        return $this->repository->paginate($page, $totalPerPage, $filter);
    }
}
