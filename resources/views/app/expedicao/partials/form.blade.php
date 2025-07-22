@csrf

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-select
        :data="$formData['clientes']"
        label="Cliente"
        name="cliente_uuid"
        lenght="5/12"
        labelKey="nome"
        :value="$expedicao->cliente_uuid ?? old('cliente_uuid')"
    />
    <x-layouts.inputs.input-normal-text
        label="Descrição"
        name="descricao"
        lenght="5/12"
        :value="$expedicao->descricao ?? old('descricao')"
    />
</div>
<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Número da Expedição"
        name="codigo"
        lenght="5/12"
        :value="$expedicao->codigo ?? old('codigo')"
    />
    <x-layouts.inputs.input-date
        label="Data"
        name="data"
        lenght="5/12"
        :value="$expedicao->data ?? old('data')"
    />
</div>
<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="CEP"
        name="cep"
        lenght="5/12"
        :value="$expedicao->cep ?? old('cep')"
    />
    <x-layouts.inputs.input-normal-text
        label="Endereço"
        name="endereco"
        lenght="5/12"
        :value="$expedicao->endereco ?? old('endereco')"
    />
</div>
<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Número"
        name="numero"
        lenght="5/12"
        :value="$expedicao->numero ?? old('numero')"
    />
    <x-layouts.inputs.input-normal-text
        label="Embalador"
        name="embalador"
        lenght="5/12"
        :value="$expedicao->embalador ?? old('embalador')"
    />
</div>

@livewire('components.app.expedicao-lista-produtos', [$formData])

<x-layouts.buttons.submit-button text="Salvar"/>
