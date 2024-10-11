<?php

namespace App\Repositories\Especie;

use App\DTO\Especie\EspecieDeleteDTO;
use App\DTO\Especie\EspecieStoreDTO;
use App\DTO\Especie\EspecieUpdateDTO;
use App\Models\Especie;
use App\Repositories\Interfaces\PaginationInterface;
use App\Repositories\Presenters\PaginationPresenter;

class EspecieEloquentRepository implements EspecieRepositoryInterface
{
    protected $model;

    public function __construct(Especie $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function totalQuantity() : int {
        return $this->model->count();
    }

    public function find(string $uuid): Especie
    {
        return $this->model
//            ->with('promotor', 'leiloeiro', 'lotes')
            ->where('uuid', $uuid)->firstOrFail();
    }

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        $query = $this->model->query();

//        if(!is_null($filter)) {
//            $query->where("nome", "like", "%".$filter."%");
//            $query->orWhere("situacao", "like", "%".$filter."%");
//        }

        $query->orderBy('updated_at', 'desc');

        $result = $query->paginate($totalPerPage, ['*'], 'page', $page);

        return new PaginationPresenter($result);
    }

    public function new(EspecieStoreDTO $dto): Especie
    {
        return $this->model->create((array) $dto);
    }

    public function update(EspecieUpdateDTO $dto): Especie
    {
        $this->model->where("uuid", $dto->uuid)->update((array) $dto);

        return $this->find($dto->uuid);
    }

    public function delete(string $uuid): void
    {
        $especie = $this->find($uuid);
        $especie->delete();
    }
}
