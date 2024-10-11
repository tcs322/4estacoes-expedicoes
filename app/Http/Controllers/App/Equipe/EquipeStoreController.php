<?php

namespace App\Http\Controllers\App\Equipe;

use App\Actions\Equipe\EquipeStoreAction;
use App\DTO\Equipe\EquipeStoreDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Equipe\EquipeStoreRequest;

class EquipeStoreController extends Controller
{

    public function __construct(
        protected EquipeStoreAction $action
    ) { }

    public function store(EquipeStoreRequest $equipeStoreRequest)
    {
        $this->action->exec(
            EquipeStoreDTO::makeFromRequest($equipeStoreRequest)
        );

        return redirect()->route('equipe.index');
    }

}
