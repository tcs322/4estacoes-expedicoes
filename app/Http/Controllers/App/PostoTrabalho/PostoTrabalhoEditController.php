<?php

namespace App\Http\Controllers\App\PostoTrabalho;

use App\Actions\PostoTrabalho\PostoTrabalhoCreateAction;
use App\Actions\PostoTrabalho\PostoTrabalhoEditAction;
use App\DTO\PostoTrabalho\PostoTrabalhoEditDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\PostoTrabalho\PostoTrabalhoEditRequest;

class PostoTrabalhoEditController extends Controller
{
    public function __construct(
        protected PostoTrabalhoEditAction $editAction,
        protected PostoTrabalhoCreateAction $createAction
    ) { }

    public function edit(string $uuid, PostoTrabalhoEditRequest $editRequest)
    {
        $editRequest->merge([
            "uuid" => $uuid
        ]);

        $formData = $this->createAction->exec();

        $postoTrabalho = $this->editAction->exec(PostoTrabalhoEditDTO::makeFromRequest($editRequest));

        return view('app.posto-trabalho.edit', [
            "postoTrabalho" => $postoTrabalho,
            "formData" => $formData
        ]);
    }
}
