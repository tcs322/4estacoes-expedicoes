<?php

namespace App\Http\Controllers\App\Departamento;

use App\Actions\Departamento\DepartamentoCreateAction;
use App\Actions\Departamento\DepartamentoEditAction;
use App\DTO\Departamento\DepartamentoEditDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Departamento\DepartamentoEditRequest;

class DepartamentoEditController extends Controller
{
    public function __construct(
        protected DepartamentoEditAction $editAction,
        protected DepartamentoCreateAction $createAction
    ) { }

    public function edit(string $uuid, DepartamentoEditRequest $editRequest)
    {
        $editRequest->merge([
            "uuid" => $uuid
        ]);

        $formData = $this->createAction->exec();

        $departamento = $this->editAction->exec(DepartamentoEditDTO::makeFromRequest($editRequest));

        return view('app.departamento.edit', [
            "departamento" => $departamento,
            "formData" => $formData
        ]);
    }
}
