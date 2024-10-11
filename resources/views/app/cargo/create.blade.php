@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('cargo.create') }}
@endsection

@section('title', 'Novo Cargo')

<x-layouts.headers.create-header :title="'Novo Cargo'"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{ route('cargo.store') }}" method="POST">
    @csrf
    @include('app.cargo.partials.form')
</form>

@endsection
