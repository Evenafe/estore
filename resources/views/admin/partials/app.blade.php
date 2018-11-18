@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <div class="container-fluid" id="admin">
        @include('admin.partials.logo')

        <div class="row">
            @include('admin.partials.nav')

            <div class="col-md-10 col-md-offset-3 content">
                @yield('admin-content')
            </div>

            <div class="col-md-1 sidebar sidebar-right">

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection