@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('posto-trabalho') }}
@endsection

@section('title', 'Postos Trabalho')

@section('content')

<x-layouts.headers.list-header :count="$postosTrabalho->total()" :title="'Postos-Trabalho'" :route="route('posto-trabalho.create')"/>

@include('components.alerts.form-success')

@include('app.posto-trabalho.partials.filters', [
    "postosTrabalho" => $postosTrabalho,
    "filters" => $filters
])

@include('app.posto-trabalho.partials.list', [
    "postosTrabalho" => $postosTrabalho,
    "filters" => $filters
])

@endsection
