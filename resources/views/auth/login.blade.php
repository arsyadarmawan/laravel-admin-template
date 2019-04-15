@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

    
    <div class="card card-primary">
      <div class="card-header"><h4>Login</h4></div>

      <div class="card-body">
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
          <div class="form-group">
            <label for="email">{{ __('E-Mail') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" tabindex="1" value="{{ old('email') }}" required autofocus>
           
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
           
            <div class="invalid-feedback">
              Please fill in your email
            </div>
          </div>

          <div class="form-group">
            <div class="d-block">
                <label for="password" class="control-label">{{ __('Password') }}</label>
              <div class="float-right">
                <a href="auth-forgot-password.html" class="text-small">
                  Forgot Password?
                </a>
              </div>
            </div>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            
            
            <div class="invalid-feedback">
              please fill in your password
            </div>
          </div>

          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
            
              <label class="custom-control-label" for="remember-me">Remember Me</label>
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                {{ __('Login') }}
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>
@endsection
