<?php

namespace App\Repositories\Departamento;

use App\DTO\Departamento\DepartamentoStoreDTO;
use App\DTO\Departamento\DepartamentoUpdateDTO;
use App\Models\Departamento;
use App\Repositories\Interfaces\PaginationInterface;
use App\Repositories\Presenters\PaginationPresenter;

class DepartamentoEloquentRepository implements DepartamentoRepositoryInterface
{

    public function __construct(protected Departamento $model)
    { }

    public function all(): array
    {
        return $this->model->all()->toArray();
    }

    public function allByPostoTrabalho(string $postoTrabalhoUuid): array
    {
        return $this->model->where('postos_trabalho_uuid', $postoTrabalhoUuid)->get()->toArray();
    }

    public function allBySetor(string $setorUuid): array
    {
        return $this->model->where('setores_uuid', $setorUuid)->get()->toArray();
    }

    public function new(DepartamentoStoreDTO $dto): Departamento
    {
        return $this->model->create((array)$dto);
    }

    public function find($uuid): Departamento
    {
        return $this->model
            ->with('postoTrabalho')
            ->where('uuid', $uuid)->first();
    }

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        $query = $this->model->query()
            ->with('setor')
            ->with('postoTrabalho');

        if(!is_null($filter)) {
            $query->where("nome", "like", "%".$filter."%");
        }

        $query->orderBy('updated_at', 'desc');

        $result = $query->paginate($totalPerPage, ['*'], 'page', $page);

        return new PaginationPresenter($result);
    }

    public function update(DepartamentoUpdateDTO $dto): Departamento
    {
        $this->model->where("uuid", $dto->uuid)->update((array) $dto);

        return $this->find($dto->uuid);
    }

    public function delete(string $uuid): void
    {
        $departamento = $this->find($uuid);

        $departamento->delete();
    }

}
