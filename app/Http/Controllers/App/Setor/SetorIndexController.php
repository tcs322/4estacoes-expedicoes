<?php

namespace App\Http\Controllers\App\Setor;

use App\Actions\Setor\SetorIndexAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Setor\SetorIndexRequest;

class SetorIndexController extends Controller
{
    public function __construct(
        protected SetorIndexAction $indexAction
    ) {}

    public function index(SetorIndexRequest $setorIndexRequest)
    {
        $setores = $this->indexAction->exec(
            page: $setorIndexRequest->get('page', 1),
            totalPerPage:  $setorIndexRequest->get('totalPerPage', 15),
            filter: $setorIndexRequest->get('filter', null),
        );

        $filters = ['filter' => $setorIndexRequest->get('filter', null)];

        return view('app.setor.index', compact('setores', 'filters'));
    }
}
