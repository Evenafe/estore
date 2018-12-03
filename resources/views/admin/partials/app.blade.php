@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <div class="container-fluid" id="admin">
        @include('admin.partials.logo')

        <div class="row">
            <div class="col-sm-2 col-md-2 sidebar sidebar-left">
                @include('admin.partials.nav')
            </div>


            <div class="col-sm-10 col-md-10 content">
                @yield('admin-content')
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection