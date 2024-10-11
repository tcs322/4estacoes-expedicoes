<?php

namespace App\Http\Controllers\App\Cargo;

use App\Actions\Cargo\CargoUpdateAction;
use App\DTO\Cargo\CargoUpdateDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Cargo\CargoUpdateRequest;

class CargoUpdateController extends Controller
{
    public function __construct(
        protected CargoUpdateAction $updateAction
    ) {}

    public function update(CargoUpdateRequest $updateRequest)
    {
        $this->updateAction->exec(CargoUpdateDTO::makeFromRequest($updateRequest));

        return redirect()->route('cargo.index')->with('message', 'Registro atualizado');
    }
}
