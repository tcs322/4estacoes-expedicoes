<?php

namespace App\Actions\PostoTrabalho;

use App\Repositories\PostoTrabalho\PostoTrabalhoRepositoryInterface;
use App\Repositories\Interfaces\PaginationInterface;

class PostoTrabalhoIndexAction
{
    public function __construct(
        protected PostoTrabalhoRepositoryInterface $repository
    ) { }

    public function exec(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        return $this->repository->paginate($page, $totalPerPage, $filter);
    }
}
