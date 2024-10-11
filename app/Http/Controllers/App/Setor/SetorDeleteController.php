<?php

namespace App\Http\Controllers\App\Setor;

use App\Actions\Setor\SetorDeleteAction;
use App\DTO\Setor\SetorDeleteDTO;
use App\Http\Requests\App\Setor\SetorDeleteRequest;

class SetorDeleteController {
    public function __construct(
        public SetorDeleteAction $action
    ) {}

    public function delete(SetorDeleteRequest $request)
    {
        $this->action->exec(SetorDeleteDTO::makeFromRequest($request));

        return redirect()->back();
    }
}