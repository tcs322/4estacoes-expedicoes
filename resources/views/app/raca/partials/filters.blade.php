<form class="mt-2" action="{{ route('raca.index') }}">
    <x-layouts.inputs.input-search-list :filters="$filters" />
</form>
