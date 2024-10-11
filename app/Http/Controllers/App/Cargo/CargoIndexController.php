<?php

namespace App\Http\Controllers\App\Cargo;

use App\Actions\Cargo\CargoIndexAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Cargo\CargoIndexRequest;

class CargoIndexController extends Controller
{
    public function __construct(
        protected CargoIndexAction $indexAction
    ) {}

    public function index(CargoIndexRequest $cargoIndexRequest)
    {
        $cargos = $this->indexAction->exec(
            page: $cargoIndexRequest->get('page', 1),
            totalPerPage: $cargoIndexRequest->get('totalPerPage', 15),
            filter: $cargoIndexRequest->get('filter', null),
        );

        $filters = ['filter' => $cargoIndexRequest->get('filter', null)];

        return view('app.cargo.index', compact('cargos', 'filters'));
    }
}
