<?php

namespace App\Http\Controllers\App\PostoTrabalho;

use App\Actions\PostoTrabalho\PostoTrabalhoStoreAction;
use App\DTO\PostoTrabalho\PostoTrabalhoStoreDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\PostoTrabalho\PostoTrabalhoStoreRequest;

class PostoTrabalhoStoreController extends Controller
{
    public function __construct(
        protected PostoTrabalhoStoreAction $storeAction
    ) { }

    public function store(PostoTrabalhoStoreRequest $storeRequest)
    {
        $this->storeAction->exec(PostoTrabalhoStoreDTO::makeFromRequest($storeRequest));
        return redirect()->route('posto-trabalho.index')->with('message', 'Registro criado');
    }
}
