<?php

namespace App\Http\Controllers\App\Departamento;

use App\Actions\Departamento\DepartamentoCreateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Departamento\DepartamentoCreateRequest;

class DepartamentoCreateController extends Controller
{
    public function __construct(
        protected DepartamentoCreateAction $createAction
    ) { }

    public function create(DepartamentoCreateRequest $departamentoCreateRequest)
    {
        $formData = $this->createAction->exec();
        return view('app.departamento.create', compact('formData'));
    }
}
