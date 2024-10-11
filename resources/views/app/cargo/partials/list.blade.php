<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        'Situação',
        'Ações'
    ]"
    :paginator="$cargos"
    :appends="$filters"
>
    @section('table-content')
        @foreach($cargos->items() as $index => $cargo)
            <tr>
                <td>{{ $cargo->nome }}</td>
                <td><x-layouts.badges.situacao-cargo
                    :situacao="$cargo->situacao"
                    /></td>
                <td class="text-right">
                    <x-layouts.buttons.action-button
                    text="Ver"
                    action="ver"
                    color="secondary"
                    :route="route('cargo.show', $cargo->uuid)"/>
                <x-layouts.buttons.action-button
                    text="Editar"
                    action="editar"
                    color="primary"
                    :route="route('cargo.edit', $cargo->uuid)"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
