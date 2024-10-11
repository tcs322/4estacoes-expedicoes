<?php

namespace App\Http\Controllers\App\Equipe;

use App\Actions\Equipe\EquipeUpdateAction;
use App\DTO\Equipe\EquipeUpdateDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Equipe\EquipeUpdateRequest;

class EquipeUpdateController extends Controller
{
    public function __construct(
        protected EquipeUpdateAction $updateAction
    ) {}

    public function update(string $uuid, EquipeUpdateRequest $updateRequest)
    {
        $updateRequest = $updateRequest->merge([
            'uuid' => $uuid,
        ]);

        $this->updateAction->exec(EquipeUpdateDTO::makeFromRequest($updateRequest));

        return redirect()->route('equipe.index')->with('message', 'Registro atualizado');
    }
}
