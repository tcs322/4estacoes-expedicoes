@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('cargo') }}
@endsection

@section('title', 'Cargos')

@section('content')

<x-layouts.headers.list-header :count="$cargos->total()" :title="'Cargos'" :route="'cargo/create'"/>

@include('components.alerts.form-success')

@include('app.cargo.partials.filters', [
    "cargos" => $cargos,
    "filters" => $filters
])


@include('app.cargo.partials.list', [
    "cargos" => $cargos,
    "filters" => $filters
])

@endsection
