<?php

namespace App\Http\Controllers\App\Departamento;


use App\Actions\Departamento\DepartamentoStoreAction;
use App\DTO\Departamento\DepartamentoStoreDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Departamento\DepartamentoStoreRequest;

class DepartamentoStoreController extends Controller
{
    public function __construct(
        protected DepartamentoStoreAction $storeAction
    ) { }

    public function store(DepartamentoStoreRequest $storeRequest)
    {
        $this->storeAction->exec(DepartamentoStoreDTO::makeFromRequest($storeRequest));

        return redirect()->route('departamento.index');
    }
}
