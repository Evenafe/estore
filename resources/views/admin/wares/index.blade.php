@extends('admin.partials.app')

@section('admin-content')
    <div class="admin-container" id="products">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('categories') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products') }}">Products</a>
            </li>
        </ul>

        @yield('wares-content')
    </div>
@endsection