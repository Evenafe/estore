@extends('admin.partials.app')

@section('admin-content')
    <div class="admin-container" id="wares">
        @yield('wares-content')
    </div>
    <script src="{{ asset('js/admin/wares.js') }}"></script>
@endsection