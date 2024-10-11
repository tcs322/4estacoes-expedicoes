@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('posto-trabalho.edit', $postoTrabalho) }}
@endsection

@section('title', 'Edição Posto Trabalho')

<x-layouts.headers.edit-header :title="$postoTrabalho->uuid.' - '.$postoTrabalho->nome"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{ route('posto-trabalho.update', $postoTrabalho->uuid) }}" method="POST">
    @csrf
    @method('PUT')
    @include('app.posto-trabalho.partials.form')
</form>

@endsection
