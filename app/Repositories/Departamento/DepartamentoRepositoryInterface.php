<?php

namespace App\Repositories\Departamento;

use App\DTO\Departamento\DepartamentoStoreDTO;
use App\DTO\Departamento\DepartamentoUpdateDTO;
use App\Models\Departamento;
use App\Repositories\Interfaces\PaginationInterface;

interface DepartamentoRepositoryInterface
{
    public function new(DepartamentoStoreDTO $dto): Departamento;

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface;

    public function find($uuid): Departamento;

    public function update(DepartamentoUpdateDTO $dto): Departamento;

    public function all(): array;

    public function allByPostoTrabalho(string $postoTrabalhoUuid): array;

    public function delete(string $uuid): void;
}
