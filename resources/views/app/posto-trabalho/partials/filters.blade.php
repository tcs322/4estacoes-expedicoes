<form class="mt-2" action="{{ route('posto-trabalho.index') }}">
    <x-layouts.inputs.input-search-list :filters="$filters" />
</form>
