@extends('app.layouts.app')

@section('title', 'Departamento')

@section('content')

<x-layouts.headers.list-header :count="$departamentos->total()" :title="'Departamentos'" :route="'departamento/create'"/>

@include('components.alerts.form-success')

@include('app.departamento.partials.filters', [
    "departamentos" => $departamentos,
    "filters" => $filters
])

@include('app.departamento.partials.list', [
    "departamentos" => $departamentos,
    "filters" => $filters
])

@endsection
