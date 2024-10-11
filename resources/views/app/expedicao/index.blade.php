@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('expedicao') }}
@endsection

@section('title', 'Expedições')

@section('content')

<x-layouts.headers.list-header :count="$expedicoes->total()" :title="'Expedições'" :route="'expedicao/create'"/>

@include('components.alerts.form-success')

@include('app.expedicao.partials.filters', [
    "expedicoes" => $expedicoes,
    "filters" => $filters
])


@include('app.expedicao.partials.list', [
    "expedicoes" => $expedicoes,
    "filters" => $filters
])

@endsection
