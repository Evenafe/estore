@extends('admin.wares.index')

@section('wares-content')
    <h1>Products</h1>

    <ul class="list-group wares-list">
        @foreach ($products as $product)
                <li id="{{ $product->id }}" class="list-group-item">
                    <meta name="ware" content="categories">
                    <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                    <i class="material-icons delete category">delete</i>
                    <i class="material-icons toggle category">{{ $product->active ? 'check' : 'close'}}</i>
                    <i class="material-icons edit category">edit</i>
                </li>
        @endforeach
    </ul>
@endsection
