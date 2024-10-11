<?php

namespace App\Repositories\Cargo;

use App\DTO\Cargo\CargoStoreDTO;
use App\DTO\Cargo\CargoUpdateDTO;
use App\Models\Cargo;
use App\Repositories\Interfaces\PaginationInterface;

interface CargoRepositoryInterface
{
    public function all();

    public function totalQuantity() : int;

    public function find(string $uuid): Cargo;

    public function new(CargoStoreDTO $dto): Cargo;

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface;

    public function update(CargoUpdateDTO $dto): Cargo;

    public function ativos();
}
