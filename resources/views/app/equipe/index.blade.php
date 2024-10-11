@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('equipe') }}
@endsection

@section('title', 'Equipes')

@section('content')

<x-layouts.headers.list-header :count="$equipes->total()" :title="'Equipes'" :route="'equipe/create'"/>

@include('components.alerts.form-success')

@include('app.equipe.partials.filters', [
    "equipes" => $equipes,
    "filters" => $filters
])


@include('app.equipe.partials.list', [
    "equipes" => $equipes,
    "filters" => $filters
])

@endsection
