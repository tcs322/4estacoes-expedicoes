<?php

namespace App\Http\Controllers\App\PostoTrabalho;

use App\Actions\PostoTrabalho\PostoTrabalhoCreateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\PostoTrabalho\PostoTrabalhoCreateRequest;

class PostoTrabalhoCreateController extends Controller
{
    public function __construct(
        protected PostoTrabalhoCreateAction $createAction
    ) { }

    public function create(PostoTrabalhoCreateRequest $createRequest)
    {
        $formData = $this->createAction->exec();

        return view('app.posto-trabalho.create', compact('formData'));
    }
}
