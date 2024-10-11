<?php

namespace App\Http\Controllers\App\Setor;

use App\Actions\Setor\SetorCreateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Setor\SetorCreateRequest;

class SetorCreateController extends Controller
{
    public function __construct(
        protected SetorCreateAction $createAction
    ) { }

    public function create(SetorCreateRequest $setorCreateRequest)
    {
        $formData = $this->createAction->exec();
        return view('app.setor.create', compact('formData'));
    }
}
