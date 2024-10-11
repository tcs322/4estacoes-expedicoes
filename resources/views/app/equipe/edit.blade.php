@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('equipe.edit', $equipe) }}
@endsection

@section('title', 'Edição Equipe')

<x-layouts.headers.edit-header :title="$equipe->uuid.' - '.$equipe->nome"/>

@section('content')

@include('components.alerts.form-errors')

<form action="{{route('equipe.update', $equipe->uuid)}}" method="POST">
    @csrf
    @method('PUT')
    @include('app.equipe.partials.form', ["equipe" => $equipe])
</form>

@endsection
