<?php

namespace App\Http\Controllers\App\PostoTrabalho;

use App\Actions\PostoTrabalho\PostoTrabalhoDeleteAction;
use App\DTO\PostoTrabalho\PostoTrabalhoDeleteDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\PostoTrabalho\PostoTrabalhoDeleteRequest;

class PostoTrabalhoDeleteController extends Controller
{
    public function __construct(
        protected PostoTrabalhoDeleteAction $deleteAction,
    ) { }

    public function delete(PostoTrabalhoDeleteRequest $request)
    {
        $this->deleteAction->exec(PostoTrabalhoDeleteDTO::makeFromRequest($request));

        return redirect()->back();
    }
}
