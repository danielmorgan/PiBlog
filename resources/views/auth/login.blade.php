@extends('layouts.simple')
@section('title', 'Login')
@section('body-class', 'login')

@section('content')
<div id="login" class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
	<h1>Login</h1>

	<form method="POST" action="/auth/login">
	    {!! csrf_field() !!}

	    <div class="form-group">
	    	<input type="text" name="email" placeholder="Email" value="{{ old('email') }}" class="col-xs-6">
	    	<input type="password" name="password" placeholder="Password" class="col-xs-6">
    	</div>

	    <div class="form-group">
	    	<label class="remember col-xs-6" for="remember"><input type="checkbox" name="remember" id="remember"> Remember Me</label>
	    	<input type="submit" value="Login" class="btn btn-primary col-xs-6">
    	</div>
	</form>
</div>
@endsection