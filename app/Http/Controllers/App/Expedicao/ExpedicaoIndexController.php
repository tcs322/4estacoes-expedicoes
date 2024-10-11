<?php

namespace App\Http\Controllers\App\Expedicao;

use App\Actions\Expedicao\ExpedicaoIndexAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Expedicao\ExpedicaoIndexRequest;

class ExpedicaoIndexController extends Controller
{
    public function __construct(
        protected ExpedicaoIndexAction $indexAction
    ) { }

    public function index(ExpedicaoIndexRequest $request)
    {
        $expedicoes = $this->indexAction->exec(
            page: $request->get('page', 1),
            totalPerPage: $request->get('totalPerPage', 15),
            filter: $request->get('filter', null),
        );

        $filters = ['filter' => $request->get('filter', null)];

        return view('app.expedicao.index', compact('expedicoes', 'filters'));
    }
}