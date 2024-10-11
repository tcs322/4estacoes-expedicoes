<?php

namespace App\Http\Controllers\App\Cargo;

use App\Actions\Cargo\CargoCreateAction;
use App\Actions\Cargo\CargoEditAction;
use App\DTO\Cargo\CargoEditDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Cargo\CargoEditRequest;

class CargoEditController extends Controller
{
    public function __construct(
        protected CargoEditAction $editAction,
        protected CargoCreateAction $createAction
    ) { }

    public function edit
    (string $uuid, 
    CargoEditRequest $editRequest)
    {
        $editRequest->merge([
            "uuid" => $uuid
        ]);

        $formData = $this->createAction->exec();
        
        $cargo = $this->editAction->exec(CargoEditDTO::makeFromRequest($editRequest));

        return view('app.cargo.edit', [
            "cargo" => $cargo,
            "formData" => $formData
        ]);
    }
}
