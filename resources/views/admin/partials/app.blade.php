@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <div class="container-fluid" id="admin">
        @include('admin.partials.logo')

        <div class="row">
            <div class="col-md-2 sidebar sidebar-left">
                @include('admin.partials.nav')
            </div>


            <div class="col-md-9 col-md-offset-3 content">
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