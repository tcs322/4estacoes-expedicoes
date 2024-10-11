<?php

namespace App\Repositories\Setor;

use App\DTO\Setor\SetorStoreDTO;
use App\DTO\Setor\SetorUpdateDTO;
use App\Models\Setor;
use App\Repositories\Interfaces\PaginationInterface;

interface SetorRepositoryInterface
{
    public function new(SetorStoreDTO $dto): Setor;

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface;

    public function find($uuid): Setor;

    public function update(SetorUpdateDTO $dto): Setor;

    public function all(): array;

    public function allByPostoTrabalho(string $postoTrabalhoUuid): array;

    public function delete(string $uuid): void;
}
