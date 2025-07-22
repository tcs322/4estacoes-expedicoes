<?php

namespace App\Livewire\Components\App;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Produto;

class ProductItem extends Component
{
    use WithFileUploads;

    public $xmlFile;
    public $produtos = [];

    public function updated($property)
    {
        if ($property === 'xmlFile') {
            if (!$this->xmlFile?->getRealPath()) {
                return;
            }

            try {
                $xmlContent = file_get_contents($this->xmlFile->getRealPath());
                $xmlObject = simplexml_load_string($xmlContent, "SimpleXMLElement", LIBXML_NOCDATA);
                $array = json_decode(json_encode($xmlObject), true);

                $detList = $array['NFe']['infNFe']['det']
                    ?? $array['infNFe']['det']
                    ?? [];

                // Garante que seja sempre um array indexado
                if (isset($detList['prod'])) {
                    $detList = [$detList];
                }

                $this->produtos = collect($detList)->map(function ($item) {
                    return $item['prod'] ?? [];
                })->toArray();

            } catch (\Exception $e) {
                $this->addError('xmlFile', 'Erro ao processar o XML: ' . $e->getMessage());
            }
        }
    }

    public function salvar()
    {
        foreach ($this->produtos as $produto) {
            if (
                !isset($produto['cProd'], $produto['xProd'], $produto['vUnCom'], $produto['qCom']) ||
                !is_numeric($produto['vUnCom']) || !is_numeric($produto['qCom'])
            ) {
                continue; // Pula itens incompletos
            }

            Produto::updateOrCreate(
                ['codigo' => $produto['cProd']],
                [
                    'nome' => $produto['xProd'],
                    'preco' => $produto['vUnCom'],
                    'quantidade' => $produto['qCom'] // opcional: crie esse campo no seu banco
                ]
            );
        }

        session()->flash('success', 'Produtos salvos com sucesso!');
    }

    public function render()
    {
        return view('livewire.components.app.product-item');
    }
}
