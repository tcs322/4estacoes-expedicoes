<?php

namespace App\Http\Controllers\App\Departamento;

use App\Actions\Departamento\DepartamentoUpdateAction;
use App\DTO\Departamento\DepartamentoUpdateDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Departamento\DepartamentoUpdateRequest;

class DepartamentoUpdateController extends Controller
{
    public function __construct(
        protected DepartamentoUpdateAction $updateAction
    ) { }

    public function update(string $uuid, DepartamentoUpdateRequest $updateRequest)
    {
        $updateRequest = $updateRequest->merge([
            'uuid' => $uuid,
        ]);
        $this->updateAction->exec(DepartamentoUpdateDTO::makeFromRequest($updateRequest));

        return redirect()->route('departamento.index')->with('message', 'Registro atualizado com sucesso');
    }
}
