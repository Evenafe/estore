@extends('admin.wares.index')

@section('wares-content')
    <h1>Categories</h1>

    @include('admin.wares.categories.store')

    @include('admin.wares.categories.list', compact('categories', 'products'))

@endsection