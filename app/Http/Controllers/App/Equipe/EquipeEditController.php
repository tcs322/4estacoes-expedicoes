<?php

namespace App\Http\Controllers\App\Equipe;

use App\Actions\Equipe\EquipeCreateAction;
use App\Actions\Equipe\EquipeEditAction;
use App\DTO\Equipe\EquipeEditDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Equipe\EquipeEditRequest;

class EquipeEditController extends Controller
{
    public function __construct(
        protected EquipeEditAction $storeAction
    ) { }

    public function Edit(string $uuid, EquipeEditRequest $storeRequest)
    {
        $storeRequest->merge([
            "uuid" => $uuid
        ]);

        $formData = (new EquipeCreateAction())->exec();

        $equipe = $this->storeAction->exec(EquipeEditDTO::makeFromRequest($storeRequest));

        return view('app.equipe.edit', [
            "equipe" => $equipe,
            "formData" => $formData
        ]);
    }
}
