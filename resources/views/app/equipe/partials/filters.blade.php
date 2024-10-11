<form class="mt-2" action="{{ route('equipe.index') }}">
    <x-layouts.inputs.input-search-list :filters="$filters" />
</form>
