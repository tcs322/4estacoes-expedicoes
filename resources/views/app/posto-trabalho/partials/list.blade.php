<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        ''
    ]"
    :paginator="$postosTrabalho"
    :appends="$filters"
>
    @section('table-content')
        @foreach($postosTrabalho->items() as $index => $postoTrabalho)
            <tr>
                <td>{{ $postoTrabalho->nome }}</td>
                <td class="text-right">
                    <x-layouts.buttons.action-button
                        text="Excluir"
                        action="excluir"
                        color="danger"
                        :identificador="'drawer-delete-confirmacao'.$postoTrabalho->uuid"
                        :route="route('posto-trabalho.delete', [
                            'uuid' => $postoTrabalho->uuid
                        ])"
                    />
                    <x-layouts.buttons.action-button
                        text="Editar"
                        action="editar"
                        color="primary"
                        :route="route('posto-trabalho.edit', $postoTrabalho->uuid)"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
