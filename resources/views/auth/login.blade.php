@extends('layouts.simple')
@section('title', 'Login')
@section('body-class', 'login')

@section('content')
<div id="login" class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
    <h1>Login</h1>

    <form method="POST" action="/login">
        {!! csrf_field() !!}

        <div class="row">
            <div class="col-sm-6">
                <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
            </div>
            <div class="col-sm-6">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="col-sm-6">
                <label class="remember" for="remember"><input type="checkbox" name="remember" id="remember"> Remember Me</label>
            </div>
            <div class="col-sm-6">
                <input type="submit" value="Login" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
@endsection