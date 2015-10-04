@extends('layouts.simple')
@section('title', 'Login')
@section('body-class', 'login')

@section('content')
<div id="login" class="">
    <h1>Login</h1>
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

        <div class="row">
            <div class="col-sm-6">
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            </div>
            <div class="col-sm-6">
                <input type="password" name="password" placeholder="Password" required>
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