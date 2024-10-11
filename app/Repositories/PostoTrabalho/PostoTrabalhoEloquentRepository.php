<?php

namespace App\Repositories\PostoTrabalho;

use App\DTO\PostoTrabalho\PostoTrabalhoStoreDTO;
use App\DTO\PostoTrabalho\PostoTrabalhoUpdateDTO;
use App\Models\PostoTrabalho;
use App\Repositories\Interfaces\PaginationInterface;
use App\Repositories\Presenters\PaginationPresenter;

class PostoTrabalhoEloquentRepository implements PostoTrabalhoRepositoryInterface
{

    public function __construct(protected PostoTrabalho $model)
    { }

    public function all(): array
    {
        return $this->model->all()->toArray();
    }

    public function new(PostoTrabalhoStoreDTO $dto): PostoTrabalho
    {
        return $this->model->create((array)$dto);
    }

    public function find($uuid): PostoTrabalho
    {

        return $this->model
            // ->with('setores')
            ->where('uuid', $uuid)->first();
    }

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        $query = $this->model->query();

        if(!is_null($filter)) {
            $query->where("nome", "like", "%".$filter."%");
        }

        $query->orderBy('updated_at', 'desc');

        $result = $query->paginate($totalPerPage, ['*'], 'page', $page);

        return new PaginationPresenter($result);
    }

    public function update(PostoTrabalhoUpdateDTO $dto): PostoTrabalho
    {
        $this->model->where("uuid", $dto->uuid)->update((array) $dto);

        return $this->find($dto->uuid);
    }

    public function delete(string $uuid): void
    {
        $postoTrabalho = $this->find($uuid);

        $postoTrabalho->delete();
    }

}
