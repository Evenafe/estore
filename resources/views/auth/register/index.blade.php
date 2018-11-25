@extends('layouts.app')

@section('title', 'Register')

@section('logo')
    <h1>eStore</h1>
@endsection

@section('content')
    <div class="container center-block auth-form" id="register">
        <form method="POST" action={{ route('register.store') }}>
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input required name="name" type="text" class="form-control" aria-describedby="nameHelp" placeholder="Your name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input required name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input required name="password" type="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Re-type password</label>
                <input required name="password_confirmation" type="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn-lg btn btn-primary">Register</button>
        </form>
        @if($errors->any())
            @include('layouts.errors')
        @endif
    </div>
@endsection