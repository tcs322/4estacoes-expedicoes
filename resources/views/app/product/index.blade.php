@extends('app.layouts.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('product') }}
@endsection

@section('title', 'Produtos')

@section('content')

<x-layouts.headers.list-header :count="$products->total()" :title="'Produtos'" :route="'product/create'"/>

@include('components.alerts.form-success')

@include('app.product.partials.filters', [
    "products" => $products,
    "filters" => $filters
])


@include('app.product.partials.list', [
    "products" => $products,
    "filters" => $filters
])

@endsection
