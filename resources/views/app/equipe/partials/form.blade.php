<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Equipe"
        name="nome"
        lenght="8/12"
        :value="$equipe->nome ?? old('nome')"
    />
</div>
    <x-layouts.inputs.input-switch
        label="Situação"
        name="situacao"
        :value="$equipe->situacao ?? old('situacao')"
    />

<x-layouts.buttons.submit-button text="Salvar"/>
