<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        'Posto de Trabalho',
        ''
    ]"
    :paginator="$setores"
    :appends="$filters"
>
    @section('table-content')
        @foreach($setores->items() as $index => $setor)
            <tr>
                <td>{{ $setor->nome }}</td>
                <td>{{ $setor->posto_trabalho['nome'] }}</td>
                <td class="text-right">
                    <x-layouts.buttons.action-button
                            text="Excluir"
                            action="excluir"
                            color="danger"
                            :identificador="'drawer-delete-confirmacao'.$setor->uuid"
                            :route="route('setor.delete', [
                                'uuid' => $setor->uuid
                            ])"
                        />
                    <x-layouts.buttons.action-button
                        text="Editar"
                        action="editar"
                        color="primary"
                        :route="route('setor.edit', $setor->uuid)"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
