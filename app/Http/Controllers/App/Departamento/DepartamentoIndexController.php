<?php

namespace App\Http\Controllers\App\Departamento;

use App\Actions\Departamento\DepartamentoIndexAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Departamento\DepartamentoIndexRequest;

class DepartamentoIndexController extends Controller
{
    public function __construct(
        protected DepartamentoIndexAction $indexAction
    ) {}

    public function index(DepartamentoIndexRequest $departamentoIndexRequest)
    {
        $departamentos = $this->indexAction->exec(
            page: $departamentoIndexRequest->get('page', 1),
            totalPerPage:  $departamentoIndexRequest->get('totalPerPage', 15),
            filter: $departamentoIndexRequest->get('filter', null),
        );

        $filters = ['filter' => $departamentoIndexRequest->get('filter', null)];

        return view('app.departamento.index', compact('departamentos', 'filters'));
    }
}
