@extends('app.layouts.app')

@section('title', 'Adicionar Produtos')

<x-layouts.headers.create-header :title="'Adicionar Produtos'"/>

@section('content')

@include('components.alerts.form-errors')

<form wire:submit.prevent="salvar">
    @csrf

    @livewire('components.app.product-item')

    <button type="submit">Salvar Produto</button>
</form>

@endsection
