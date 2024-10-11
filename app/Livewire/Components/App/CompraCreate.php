<?php

namespace App\Livewire\Components\App;

use App\Actions\Cliente\ClienteSearchAction;
use App\Models\Cliente;
use App\Repositories\Cliente\ClienteEloquentRepository;
use Carbon\Carbon;
use Livewire\Component;

class CompraCreate extends Component
{
    public array $formData;
    public string $search;
    public array $compradores;
    public string $valorLance;

    public array $searchResult;
    public array $parcelas;
    public bool $incideComissaoCompra;
    public bool $incideComissaoVenda;

    public function mount(array $formData)
    {
        $this->formData = $formData;
        $this->search = "";
        $this->searchResult = [];
        $this->valorLance = $this->formData['lote']['valor_estimado'];
        $this->parcelas = [];
        $this->compradores = [];
        $this->incideComissaoVenda = $this->formData['lote']['incide_comissao_venda'];
        $this->incideComissaoCompra = $this->formData['lote']['incide_comissao_compra'];
        if(!empty($this->compradores)) {
            $this->updatedValorLance();
        }
    }

    public function render()
    {
        return view('livewire.components.app.compra-create');
    }

    public function updatedValorLance()
    {
        $carbonHoje = Carbon::now();
        $this->parcelas = [];
        $condicoesPagamento = $this->formData['lote']['plano_pagamento']['condicoes_pagamento'];

        foreach ($condicoesPagamento as $key => $condicaoPagamento)
        {
            for($i = 0; $i <= $condicaoPagamento['qtd_parcelas']; $i++) {
                $valor = ($condicaoPagamento['repeticoes'] * ($this->valorLance * count($this->formData['lote']['itens']))) / $this->getQuantidadeCompradoresProperty();
                $valorComissaoComprador = $this->incideComissaoCompra
                    ? ($condicaoPagamento['percentual_comissao_comprador'] / 100) * $valor : 0;
                $valorComissaoVendedor = $this->incideComissaoVenda
                    ? ($condicaoPagamento['percentual_comissao_vendedor'] / 100) * $valor : 0;

                $this->parcelas[] = [
                    'valor_original' => $this->valorLance,
                    'valor' => $valor,
                    'repeticoes' => $condicaoPagamento['repeticoes'],
                    'data_pagamento' => $carbonHoje->addMonth()->toDateString(),
                    'incide_comissao_compra' => $this->incideComissaoCompra,
                    'incide_comissao_venda' => $this->incideComissaoVenda,
                    'percentual_comissao_vendedor' => $condicaoPagamento['percentual_comissao_vendedor'],
                    'percentual_comissao_comprador' => $condicaoPagamento['percentual_comissao_comprador'],
                    'valor_comissao_comprador' => $valorComissaoComprador,
                    'valor_comissao_vendedor' => $valorComissaoVendedor
                ];
            }
        }
    }

    public function updatedSearch()
    {
        if (!empty($this->search))
        {
            $this->searchResult = (new ClienteSearchAction(
                new ClienteEloquentRepository(new Cliente())
            ))->execute($this->search);
        }
    }

    public function addComprador($comprador)
    {
        $this->compradores[] = $comprador;
        $this->searchResult = [];
        $this->search = "";
        $this->updatedValorLance();
    }

    public function removerCliente($index)
    {
        array_splice($this->compradores, $index, 1);
        if(!empty($this->compradores))
        {
            $this->updatedValorLance();
        }
    }

    public function getValorTotalLoteProperty()
    {
        return array_sum(array_column($this->parcelas, 'valor'));
    }

    public function getValorTotalComissaoVendedorProperty()
    {
        return array_sum(array_column($this->parcelas, 'valor_comissao_vendedor'));
    }

    public function getValorTotalComissaoCompradorProperty()
    {
        return array_sum(array_column($this->parcelas, 'valor_comissao_comprador'));
    }

    public function getDiferencaValorEstimadoProperty()
    {
        return $this->valorTotalLote - $this->formData['lote']['valor_estimado'];
    }

    public function getDiferencaValorEstimadoPercentualProperty()
    {
        return $this->valorTotalLote - $this->formData['lote']['valor_estimado'];
    }

    public function getQuantidadeCompradoresProperty()
    {
        return count($this->compradores);
    }
}
