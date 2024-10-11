@csrf

@livewire('components.select-boxes.estrutura-organizacional', [
    'components' => ['postos_trabalho', 'setores'],
    'postoTrabalhoUuid' => $departamento->postos_trabalho_uuid ?? old('postoTrabalhoUuid'),
    'setorUuid' => $departamento->setores_uuid ?? old('setorUuid')
])

<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Departamento"
        name="nome"
        lenght="6/12"
        :value="$departamento->nome ?? old('nome')"
    />
</div>

<x-layouts.buttons.submit-button text="Salvar"/>
