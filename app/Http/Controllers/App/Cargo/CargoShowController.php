<?php

namespace App\Http\Controllers\App\Cargo;

use App\Actions\Cargo\CargoShowAction;
use App\DTO\Cargo\CargoShowDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Cargo\CargoShowRequest;

class CargoShowController extends Controller
{
    public function __construct(
        protected CargoShowAction $storeAction
    ) {}

    public function show(string $uuid, CargoShowRequest $storeRequest)
    {
        $storeRequest->merge([
            "uuid" => $uuid
        ]);

        $cargo = $this->storeAction->exec(CargoShowDTO::makeFromRequest($storeRequest));
        
        return view('app.cargo.show', [
            "cargo" => $cargo
        ]);
    }
}
