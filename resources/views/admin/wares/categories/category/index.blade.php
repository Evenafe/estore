@extends('admin.wares.index')

@section('wares-content')
    <div id="category">
        <a href="{{ route('categories') }}">Back</a>
        <h2 class="ware-title">Category: <span class="category-title">{{ $category->name }}</span></h2>
        <hr>
        <button id="product-button" class="btn btn-success" role="button" aria-pressed="true">Create new product</button>

        @if($errors->any())
            @include('layouts.errors')
        @endif

        <div id="create-product-form" class="hidden">
            @include('admin.wares.products.store')
        </div>

        <h2 class="ware-title">Products</h2>
        <hr>
        @include('admin.wares.categories.category.list', compact('products'))
    </div>
@endsection