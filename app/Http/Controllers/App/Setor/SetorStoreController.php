<?php

namespace App\Http\Controllers\App\Setor;

use App\Actions\Setor\SetorStoreAction;
use App\DTO\Setor\SetorStoreDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Setor\SetorStoreRequest;

class SetorStoreController extends Controller
{
    public function __construct(
        protected SetorStoreAction $storeAction
    ) { }

    public function store(SetorStoreRequest $storeRequest)
    {
        $this->storeAction->exec(SetorStoreDTO::makeFromRequest($storeRequest));

        return redirect()->route('setor.index')->with('message', 'Registro criado');
    }
}
