@extends('admin.partials.app')

@section('admin-content')
    <div class="admin-container">
        <h1>Slider</h1>

        @include('admin.design.slider.store')

        @include('admin.design.slider.list', compact('sliders'))
    </div>
    <script src="{{ asset('js/admin/slider.js') }}"></script>
@endsection