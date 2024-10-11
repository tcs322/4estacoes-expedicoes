<?php

namespace App\Http\Controllers\App\Departamento;

use App\Actions\Departamento\DepartamentoDeleteAction;
use App\DTO\Departamento\DepartamentoDeleteDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Departamento\DepartamentoDeleteRequest;

class DepartamentoDeleteController extends Controller
{
    public function __construct(
        protected DepartamentoDeleteAction $deleteAction,
    ) { }

    public function delete(DepartamentoDeleteRequest $request)
    {
        $this->deleteAction->exec(DepartamentoDeleteDTO::makeFromRequest($request));

        return redirect()->back();
    }
}
