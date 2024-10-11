<form class="mt-2" action="{{ route('expedicao.index') }}">
    <x-layouts.inputs.input-search-list :filters="$filters" />
</form>
