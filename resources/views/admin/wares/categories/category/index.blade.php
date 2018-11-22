@extends('admin.wares.index')

@section('wares-content')
    <div id="category">
        <a href="{{ route('categories') }}">Back</a>
        <h2 class="ware-title">Category: <span class="category-title">{{ $category->name }}</span></h2>
        <hr>
        <button id="product-button" class="btn btn-primary" role="button" aria-pressed="true">Create new product</button>

        <div id="create-product-form" class="hidden">
            @include('admin.wares.products.store')
        </div>

        <h2 class="ware-title">Products</h2>
        <hr>
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection