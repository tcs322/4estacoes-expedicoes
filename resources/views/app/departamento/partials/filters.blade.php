<form class="mt-2" action="{{ route('departamento.index') }}">
    <x-layouts.inputs.input-search-list :filters="$filters" />
</form>
