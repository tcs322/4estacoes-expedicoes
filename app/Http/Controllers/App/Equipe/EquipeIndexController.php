<?php

namespace App\Http\Controllers\App\Equipe;

use App\Actions\Equipe\EquipeIndexAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Equipe\EquipeIndexRequest;

class EquipeIndexController extends Controller
{
    public function __construct(
        protected EquipeIndexAction $indexAction
    ) {}

    public function index(EquipeIndexRequest $equipeIndexRequest)
    {
        $equipes = $this->indexAction->exec(
            page: $equipeIndexRequest->get('page', 1),
            totalPerPage: $equipeIndexRequest->get('totalPerPage', 15),
            filter: $equipeIndexRequest->get('filter', null),
        );

        $filters = ['filter' => $equipeIndexRequest->get('filter', null)];

        return view('app.equipe.index', compact('equipes', 'filters'));
    }
}
