<?php

namespace App\Repositories\Equipe;

use App\DTO\Equipe\EquipeStoreDTO;
use App\DTO\Equipe\EquipeUpdateDTO;
use App\Models\Equipe;
use App\Repositories\Interfaces\PaginationInterface;

interface EquipeRepositoryInterface
{
    public function all();

    public function totalQuantity() : int;

    public function new(EquipeStoreDTO $dto): Equipe;

    public function find(string $uuid): Equipe;

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface;

    public function update(EquipeUpdateDTO $dto): Equipe;

    public function ativos();
}
