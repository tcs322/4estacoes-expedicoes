<?php

namespace App\Repositories\PostoTrabalho;

use App\DTO\PostoTrabalho\PostoTrabalhoStoreDTO;
use App\DTO\PostoTrabalho\PostoTrabalhoUpdateDTO;
use App\Models\PostoTrabalho;
use App\Repositories\Interfaces\PaginationInterface;

interface PostoTrabalhoRepositoryInterface
{
    public function new(PostoTrabalhoStoreDTO $dto): PostoTrabalho;

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface;

    public function find($uuid): PostoTrabalho;

    public function update(PostoTrabalhoUpdateDTO $dto): PostoTrabalho;

    public function delete(string $uuid): void;

    public function all(): array;
    
}
