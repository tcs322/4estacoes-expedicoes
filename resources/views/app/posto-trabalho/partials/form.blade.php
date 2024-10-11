<div class="flex flex-wrap -mx-3 mb-2">
    <x-layouts.inputs.input-normal-text
        label="Posto Trabalho"
        name="nome"
        lenght=""
        :value="$postoTrabalho->nome ?? old('nome')"
    />
</div>

<x-layouts.buttons.submit-button text="Salvar"/>


