<?php

namespace App\Http\Controllers\App\Leilao;

use App\Actions\Leilao\LeilaoIndexAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeilaoIndexController extends Controller
{
    public function __construct() {}

    public function index(Request $leilaoIndexRequest, LeilaoIndexAction $action)
    {
        $leiloes = $action->exec(
            $leilaoIndexRequest->get('page') ?? 1,
            $leilaoIndexRequest->get('totalPerPage') ?? 20,
            []
        );

        return view('app.leilao.index', [
            'leiloes' => $leiloes
        ]);
    }
}
