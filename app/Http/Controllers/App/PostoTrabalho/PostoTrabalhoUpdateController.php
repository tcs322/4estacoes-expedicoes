<?php

namespace App\Http\Controllers\App\PostoTrabalho;

use App\Actions\PostoTrabalho\PostoTrabalhoUpdateAction;
use App\DTO\PostoTrabalho\PostoTrabalhoUpdateDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\PostoTrabalho\PostoTrabalhoUpdateRequest;

class PostoTrabalhoUpdateController extends Controller
{
    public function __construct(
        protected PostoTrabalhoUpdateAction $updateAction
    ) { }

    public function update(string $uuid, PostoTrabalhoUpdateRequest $updateRequest)
    {
        $updateRequest = $updateRequest->merge([
            'uuid' => $uuid,
        ]);
        $this->updateAction->exec(PostoTrabalhoUpdateDTO::makeFromRequest($updateRequest));

        return redirect()->route('posto-trabalho.index')->with('message', 'Registro atualizado com sucesso');
    }
}
