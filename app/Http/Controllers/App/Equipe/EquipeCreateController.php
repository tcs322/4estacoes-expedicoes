<?php

namespace App\Http\Controllers\App\Equipe;

use App\Actions\Equipe\EquipeCreateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Equipe\EquipeCreateRequest;

class EquipeCreateController extends Controller
{
    public function __construct(
        protected EquipeCreateAction $createAction
    ) { }

    public function create(EquipeCreateRequest $equipeCreateRequest)
    {
        $formData = $this->createAction->exec();
        return view('app.equipe.create', compact('formData'));
    }
}
