<form class="mt-2" action="{{ route('setor.index') }}">
    <x-layouts.inputs.input-search-list :filters="$filters" />
</form>
