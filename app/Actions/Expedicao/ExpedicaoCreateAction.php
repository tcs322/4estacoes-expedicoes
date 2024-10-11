<?php

namespace App\Actions\Expedicao;

use App\Repositories\Cliente\ClienteRepositoryInterface;
use App\Repositories\Produto\ProdutoRepositoryInterface;

class ExpedicaoCreateAction
{
    public function __construct(
        protected ProdutoRepositoryInterface $produtoRepository,
        protected ClienteRepositoryInterface $clienteRepository
    ) 
    { 
        $this->produtoRepository = $produtoRepository;
        $this->clienteRepository = $clienteRepository;
    }

    public function exec(): array
    {
        return [
            'clientes' => $this->clienteRepository->all(),
            'produtos' => $this->produtoRepository->all()
        ];
    }
}