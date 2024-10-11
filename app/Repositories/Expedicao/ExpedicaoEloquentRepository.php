<?php

namespace App\Repositories\Expedicao;

use App\Models\Expedicao;
use App\Repositories\Interfaces\PaginationInterface;
use App\Repositories\Presenters\PaginationPresenter;

class ExpedicaoEloquentRepository implements ExpedicaoRepositoryInterface
{
    protected $model;
    
    public function __construct(Expedicao $model)
    { 
        $this->model = $model;
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
}
