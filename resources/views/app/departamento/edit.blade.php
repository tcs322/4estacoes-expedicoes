@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('departamento.edit', $departamento) }}
@endsection

@section('title', 'Edição Departamento')

<x-layouts.headers.edit-header :title="$departamento->uuid.' - '.$departamento->nome"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{ route('departamento.update', $departamento->uuid) }}" method="POST">
    @csrf
    @method('PUT')
    @include('app.departamento.partials.form')
</form>

@endsection

