<x-layouts.tables.simple-table
    :headers="[
        'Código',
        'Descrição',
        'Ações'
    ]"
    :paginator="$expedicoes"
    :appends="$filters"
>
    @section('table-content')
        @foreach($expedicoes->items() as $index => $expedicao)
            <tr>
                <td>{{ $expedicao->descricao }}</td>
                <td class="text-right">
                <x-layouts.buttons.action-button
                    text="Ver"
                    action="ver"
                    color="secondary"
                    :route="route('cargo.show', $expedicao->uuid)"/>
                <x-layouts.buttons.action-button
                    text="Editar"
                    action="editar"
                    color="primary"
                    :route="route('especie.edit', $expedicao->uuid)"/>
                <x-layouts.buttons.action-button
                    text="Excluir"
                    action="excluir"
                    color="danger"
                    :identificador="'drawer-delete-confirmacao'"
                    :route="route('especie.delete', [
                        'uuid' => $expedicao->uuid
                    ])"
                />
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
