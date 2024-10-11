<?php

namespace App\Http\Controllers\App\Equipe;

use App\Actions\Equipe\EquipeShowAction;
use App\DTO\Equipe\EquipeShowDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Equipe\EquipeShowRequest;

class EquipeShowController extends Controller
{
    public function __construct(
        protected EquipeShowAction $showAction
    ) {}

    public function show(string $uuid, EquipeShowRequest $showRequest)
    {
        $showRequest->merge([
            "uuid" => $uuid
        ]);

        $equipe = $this->showAction->exec(EquipeShowDTO::makeFromRequest($showRequest));

        return view('app.equipe.show', [
            "equipe" => $equipe
        ]);
    }
}
