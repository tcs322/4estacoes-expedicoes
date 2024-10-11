@extends('app.layouts.app')

@section('title', 'Novo Departamento')

<x-layouts.headers.create-header :title="'Novo Departamento'"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{ route('departamento.store') }}" method="POST">
    @csrf
    @include('app.departamento.partials.form')
</form>

@endsection

