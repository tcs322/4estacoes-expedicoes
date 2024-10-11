@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('equipe.create') }}
@endsection

@section('title', 'Nova Equipe')

<x-layouts.headers.create-header :title="'Nova Equipe'"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{ route('equipe.store') }}" method="POST">
    @csrf
    @include('app.equipe.partials.form')
</form>

@endsection
