@csrf

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Setor"
        name="nome"
        lenght="6/12"
        :value="$setor->nome ?? old('nome')"
    />
</div>
@livewire('components.select-boxes.estrutura-organizacional', [
    'components' => ['postos_trabalho'],
    'postoTrabalhoUuid' => $setor->postos_trabalho_uuid ?? old('nome')
])

<x-layouts.buttons.submit-button text="Salvar"/>
