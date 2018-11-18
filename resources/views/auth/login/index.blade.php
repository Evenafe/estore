@extends('layouts.app')

@section('title', 'Login')

@section('logo')
    <h1>eStore</h1>
@endsection

@section('content')
    <div class="container auth-form" id="login">
        <form method="POST" action={{ route('login.store') }}>
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Login</button>
        </form>

        @if($errors->any())
            @include('layouts.errors')
        @endif
    </div>
@endsection