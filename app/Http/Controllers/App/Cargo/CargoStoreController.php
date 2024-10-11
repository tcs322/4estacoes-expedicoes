<?php

namespace App\Http\Controllers\App\Cargo;

use App\Actions\Cargo\CargoCreateAction;
use App\Actions\Cargo\CargoStoreAction;
use App\DTO\Cargo\CargoStoreDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Cargo\CargoCreateRequest;
use App\Http\Requests\App\Cargo\CargoStoreRequest;
use App\Models\Cargo;

class CargoStoreController extends Controller
{

    public function __construct(
        protected CargoStoreAction $action
    ) { }

    public function store(CargoStoreRequest $cargoStoreRequest)
    {
        $this->action->exec(
            CargoStoreDTO::makeFromRequest($cargoStoreRequest)
        );
        
        return redirect()->route('cargo.index');
    }

}
