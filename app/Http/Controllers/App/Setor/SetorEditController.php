<?php

namespace App\Http\Controllers\App\Setor;

use App\Actions\Setor\SetorCreateAction;
use App\Actions\Setor\SetorEditAction;
use App\DTO\Setor\SetorEditDTO;
use App\Http\Requests\App\Setor\SetorEditRequest;

class SetorEditController {
    public function __construct(
        protected SetorEditAction $editAction,
        protected SetorCreateAction $createAction
    ) {}

    public function edit(string $uuid, SetorEditRequest $request)
    {
        $request->merge([
            "uuid" => $uuid
        ]);

        $formData = $this->createAction->exec();

        $setor = $this->editAction->exec(SetorEditDTO::makeFromRequest($request));

        return view('app.setor.edit', [
            "setor" => $setor,
            "formData" => $formData
        ]);


    }
}