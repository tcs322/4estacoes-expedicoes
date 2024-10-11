<x-layouts.tables.simple-table
    :headers="[
        'Nome',
        'Situação',
        'Ações'
    ]"
    :paginator="$equipes"
    :appends="$filters"
>
    @section('table-content')
        @foreach($equipes->items() as $index => $equipe)
            <tr>
                <td>{{ $equipe->nome }}</td>
                <td><x-layouts.badges.situacao-equipe
                    :situacao="$equipe->situacao"
                    />
                </td>
                <td class="text-right">
                    <x-layouts.buttons.action-button
                    text="Ver"
                    action="ver"
                    color="secondary"
                    :route="route('equipe.show', $equipe->uuid)"/>
                <x-layouts.buttons.action-button
                    text="Editar"
                    action="editar"
                    color="primary"
                    :route="route('equipe.edit', $equipe->uuid)"/>
                </td>
            </tr>
        @endforeach
    @endsection
</x-layouts.tables.simple-table>
