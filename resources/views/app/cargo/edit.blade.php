@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('cargo.edit', $cargo) }}
@endsection

@section('title', 'Edição Cargo')

<x-layouts.headers.edit-header :title="$cargo->uuid.' - '.$cargo->nome"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{route('cargo.update', $cargo->uuid)}}" method="POST">
    @method('PUT')
    @include('app.cargo.partials.form', ["cargo" => $cargo])
</form>

@endsection
