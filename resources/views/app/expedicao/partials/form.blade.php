@csrf

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-select
        :data="$formData['clientes']"
        label="Cliente"
        name="cliente_uuid"
        lenght="5/12"
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

@livewire('components.app.expedicao-lista-produtos', [$formData])

<x-layouts.buttons.submit-button text="Salvar"/>
