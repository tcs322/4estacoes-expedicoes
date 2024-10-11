<?php

namespace App\Repositories\Equipe;

use App\DTO\Equipe\EquipeStoreDTO;
use App\DTO\Equipe\EquipeUpdateDTO;
use App\Enums\SituacaoEquipeEnum;
use App\Models\Equipe;
use App\Repositories\Interfaces\PaginationInterface;
use App\Repositories\Presenters\PaginationPresenter;

class EquipeEloquentRepository implements EquipeRepositoryInterface
{
    protected $model;

    public function __construct(Equipe $model)
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

    public function find(string $uuid): Equipe
    {
        return $this->model
            ->with('servidores.cargo.servidores')
            ->where('uuid', $uuid)->first();
    }

    public function new(EquipeStoreDTO $dto): Equipe
    {
        return $this->model->create((array) $dto);
    }

    public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface
    {
        $query = $this->model->query();

        if (!is_null($filter)) {
            $query->where("nome", "like", "%".$filter."%");
        }

        $query->orderBy('updated_at', 'desc');

        $result = $query->paginate($totalPerPage, ['*'], 'page', $page);

        return new PaginationPresenter($result);
    }

    public function update(EquipeUpdateDTO $dto): Equipe
    {
        $this->model->where("uuid", $dto->uuid)->update((array)$dto);

        return $this->find($dto->uuid);
    }

    public function ativos()
    {
        return $this->model->where('situacao', SituacaoEquipeEnum::ATIVO)
        ->orderBy('nome', 'asc')
        ->get();
    }
}
