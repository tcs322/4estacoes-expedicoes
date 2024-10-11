<?php

namespace App\Http\Controllers\App\Cargo;

use App\Actions\Cargo\CargoCreateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Cargo\CargoCreateRequest;

class CargoCreateController extends Controller
{
    public function __construct(
        protected CargoCreateAction $createAction
    ) { }

    public function create(CargoCreateRequest $cargoCreateRequest)
    {
        $formData = $this->createAction->exec();
        return view('app.cargo.create', compact('formData'));
    }

}
