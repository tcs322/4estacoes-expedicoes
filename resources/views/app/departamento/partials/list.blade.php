<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        'Postos de Trabalho',
        'Setores'
    ]"
    :paginator="$departamentos"
    :appends="$filters"
>
    @section('table-content')
        @foreach($departamentos->items() as $index => $departamento)
            <tr>
                <td>{{ $departamento->nome }}</td>
                <td>{{ $departamento->posto_trabalho['nome'] }}</td>
                <td>{{ $departamento->setor['nome'] }}</td>
                <td class="text-right">
                    <x-layouts.buttons.action-button
                        text="Excluir"
                        action="excluir"
                        color="danger"
                        :identificador="'drawer-delete-confirmacao'"
                        :route="route('departamento.delete', [
                            'uuid' => $departamento->uuid
                        ])"
                    />
                    <x-layouts.buttons.action-button
                        text="Editar"
                        action="editar"
                        color="primary"
                        :route="route('departamento.edit', [
                            'uuid' => $departamento->uuid
                        ])"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
