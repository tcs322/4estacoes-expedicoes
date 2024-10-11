<?php

namespace App\Repositories\Raca;

use App\DTO\Raca\RacaStoreDTO;
use App\DTO\Raca\RacaUpdateDTO;
use App\Models\Raca;
use App\Repositories\Interfaces\PaginationInterface;

interface RacaRepositoryInterface
{
    public function all();

    public function totalQuantity() : int;

    public function find(string $uuid): Raca;

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface;

    public function new(RacaStoreDTO $dto): Raca;

    public function update(RacaUpdateDTO $dto): Raca;

    public function delete(string $uuid): void;
}
