<?php

namespace App\Http\Controllers\App\Expedicao;

use App\Actions\Expedicao\ExpedicaoCreateAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpedicaoCreateController extends Controller
{
    public function __construct(
        protected ExpedicaoCreateAction $createAction
    ) { }

    public function create(Request $request)
    {
        $formData = $this->createAction->exec();

        return view('app.expedicao.create', compact('formData'));
    }
}