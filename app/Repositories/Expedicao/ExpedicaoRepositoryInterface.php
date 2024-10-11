<?php

namespace App\Repositories\Expedicao;

use App\Repositories\Interfaces\PaginationInterface;

interface ExpedicaoRepositoryInterface
{
    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface; 

}