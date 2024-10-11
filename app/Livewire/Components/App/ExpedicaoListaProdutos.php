<?php

namespace App\Livewire\Components\App;

use App\Enums\TipoProdutoEnum;
use App\Models\Expedicao;
use App\Models\Produto;
use Livewire\Component;

class ExpedicaoListaProdutos extends Component
{
    public $errorMessage = '';
    public array $produtos;
    public array $formData;
    public Produto $produto;
    public Expedicao $expedicao;
    public string $tipo;

    protected $rules = [
        'produto.produto_uuid' => 'required|string',
        'produto.qtd_produto_individual' => 'required|number',
    ];

    public function mount(array $formData, Expedicao $expedicao = null)
    {
        $this->produtos = [];
        $this->produto = new Produto();
        $this->formData = $formData;
        $this->expedicao = $expedicao;
        $this->tipo = '';
    }

    public function render()
    {
        return view('livewire.components.app.expedicao-lista-produtos');
    }

    public function add()
    {
        $this->errorMessage = '';
        if(
            is_null($this->produto->produto_uuid) || is_null($this->produto->qtd_produto_individual)
        ) {
            $this->errorMessage = 'Preencha o formulário corretamente para continuar';
            return false;
        }

        $this->produtos[] = [
            'produto_uuid' => $this->produto->produto_uuid,
            'qtd_produto_individual' => $this->produto->qtd_produto_individual,
            'tipo_produto' => Produto::where('uuid', $this->produto->produto_uuid)->first()->tipo
        ];

        $this->produto = new Produto();
        $this->errorMessage = '';
    }

    public function remove(int $index)
    {
        array_splice($this->produtos, $index, 1);
        $this->errorMessage = '';
    }

    public function default()
    {
        return true;
    }

    public function getQuantidadeAgendaProperty()
    {
        $agendas = array_filter($this->produtos, function ($p) {
            return $p['tipo_produto'] == TipoProdutoEnum::AGENDA;
        });

        return array_sum(array_column($agendas, 'qtd_produto_individual'));
    }

    public function getQuantidadeCadernoProperty()
    {
        $cadernos = array_filter($this->produtos, function ($p) {
            return $p['tipo_produto'] == TipoProdutoEnum::CADERNO;
        });

        return array_sum(array_column($cadernos, 'qtd_produto_individual'));
    }

    public function getQuantidadeCaixaAgendaProperty()
    {
        $agendas = array_filter($this->produtos, function ($p) {
            return $p['tipo_produto'] == TipoProdutoEnum::AGENDA;
        });
        
        $qtdAgendas = array_sum(array_column($agendas, 'qtd_produto_individual'));
        
        return ceil((intval($qtdAgendas)) / 30);
    }
}
