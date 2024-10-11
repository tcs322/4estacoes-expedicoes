@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('setor.create') }}
@endsection

@section('title', 'Novo Lance')

<x-layouts.headers.create-header :title="'Novo Lance'"/>

@section('content')
    @include('components.alerts.form-errors')
    
    @livewire('components.app.pre-lance-create', [
        $leilao, 
        $lote, 
        $cliente
    ])
@endsection