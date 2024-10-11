<?php

namespace App\Http\Controllers\App\PostoTrabalho;

use App\Actions\PostoTrabalho\PostoTrabalhoIndexAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\PostoTrabalho\PostoTrabalhoIndexRequest;

class PostoTrabalhoIndexController extends Controller
{
    public function __construct(
        protected PostoTrabalhoIndexAction $indexAction
    ) {}

    public function index(PostoTrabalhoIndexRequest $postoTrabalhoIndexRequest)
    {
        $postosTrabalho = $this->indexAction->exec(
            page: $postoTrabalhoIndexRequest->get('page', 1),
            totalPerPage: $postoTrabalhoIndexRequest->get('totalPerPage', 15),
            filter: $postoTrabalhoIndexRequest->get('filter', null),
        );

        $filters = ['filter' => $postoTrabalhoIndexRequest->get('filter', null)];

        return view('app.posto-trabalho.index', compact('postosTrabalho', 'filters'));
    }
}
