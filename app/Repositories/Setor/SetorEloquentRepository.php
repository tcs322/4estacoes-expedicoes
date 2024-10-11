<?php

namespace App\Repositories\Setor;

use App\DTO\Setor\SetorStoreDTO;
use App\DTO\Setor\SetorUpdateDTO;
use App\Models\Setor;
use App\Repositories\Interfaces\PaginationInterface;
use App\Repositories\Presenters\PaginationPresenter;

class SetorEloquentRepository implements SetorRepositoryInterface
{

    public function __construct(protected Setor $model)
    { }

    public function all(): array
    {
        return $this->model->all()->toArray();
    }

    public function allByPostoTrabalho(string $postoTrabalhoUuid): array
    {
        return $this->model->where('postos_trabalho_uuid', $postoTrabalhoUuid)->get()->toArray();
    }

    public function new(SetorStoreDTO $dto): Setor
    {
        return $this->model->create((array)$dto);
    }

    public function find($uuid): Setor
    {
        return $this->model
            ->with('postoTrabalho')
            ->where('uuid', $uuid)->first();
    }

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        $query = $this->model->query()
            ->with('postoTrabalho');

        if(!is_null($filter)) {
            $query->where("nome", "like", "%".$filter."%");
        }

        $query->orderBy('updated_at', 'desc');

        $result = $query->paginate($totalPerPage, ['*'], 'page', $page);

        return new PaginationPresenter($result);
    }

    public function update(SetorUpdateDTO $dto): Setor
    {
        $this->model->where("uuid", $dto->uuid)->update((array) $dto);

        return $this->find($dto->uuid);
    }

    public function delete(string $uuid): void
    {
        $setor = $this->find($uuid);

        $setor->delete();
    }

}
