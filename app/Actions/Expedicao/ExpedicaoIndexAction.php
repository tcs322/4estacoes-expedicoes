<?php

namespace App\Actions\Expedicao;

use App\Repositories\Expedicao\ExpedicaoRepositoryInterface;
use App\Repositories\Interfaces\PaginationInterface;

class ExpedicaoIndexAction
{
    public function __construct(
        protected ExpedicaoRepositoryInterface $repository
    ) { }

    public function exec(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        return $this->repository->paginate($page, $totalPerPage, $filter);
    }
}
