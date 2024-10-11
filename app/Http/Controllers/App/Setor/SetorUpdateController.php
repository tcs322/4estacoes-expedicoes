<?php

namespace App\Http\Controllers\App\Setor;

use App\Actions\Setor\SetorUpdateAction;
use App\DTO\Setor\SetorUpdateDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Setor\SetorUpdateRequest;

class SetorUpdateController extends Controller
{
    public function __construct(
        protected SetorUpdateAction $updateAction
    ) { }

    public function update(string $uuid, SetorUpdateRequest $updateRequest)
    {
        $updateRequest = $updateRequest->merge([
            'uuid' => $uuid,
        ]);
        $this->updateAction->exec(SetorUpdateDTO::makeFromRequest($updateRequest));

        return redirect()->route('setor.index')->with('message', 'Registro atualizado com sucesso');
    }
}
