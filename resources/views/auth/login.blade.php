<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="Password">
    <label for="remember"><input type="checkbox" name="remember"> Remember Me</label>
    <input type="submit" value="Login">
</form>