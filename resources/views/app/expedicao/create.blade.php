@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('expedicao.create') }}
@endsection

@section('title', 'Nova Expedição')

<x-layouts.headers.create-header :title="'Nova Expedição'"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{ route('especie.store') }}" method="POST">
    @csrf
    @include('app.expedicao.partials.form')
</form>

@endsection
