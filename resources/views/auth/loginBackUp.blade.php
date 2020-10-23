<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ config('app.name', 'Laravel') }} | Login</title>
	<meta charset="UTF-8">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="">
	<meta name="author" content="Codemeg Solution Pvt. Ltd., info@codemeg.com">
	<meta name="url" content="http://codemeg.com">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
	<!--css-->
	@include('layouts.css')
</head>
<body>

	<section class="login-register">
        <div class="back-home">
            <div class="container">
                <a href="{{route('home')}}"><i class="fas fa-arrow-left"></i> Back To Home</a>
            </div>
        </div>
        <div class="container">
            <div class="lr-wrapper1">
                <div class="lr-wrapper2">
                    <div class="logo-input">
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img src="images/logo.png" alt="logo">
                            </a>
                        </div>
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" id="login-form">
	                        @csrf
	                        <div class="input-fields">
	                            <div class="header">
	                                <h2>Welcome</h2>
	                                <p>Please Login To Your Account</p>
	                            </div>
	    
	                            <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
	                                <input type="text" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autofocus>
	                                 @if ($errors->has('email'))
	                                     <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                     </span>
                                     @endif
	                            </div>
	                            <div class="form-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
	                                <input type="password" placeholder="Enter Password" name="password" required>
	                                @if ($errors->has('password'))
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
                                     @endif
	                            </div>
	    
	                            <div class="forgot-btn clearfix">
	                                <a class="forgot" href="javascript:void(0)">Forgot Password?</a>
	                                <button type="submit" class="btn login-btn">
	                                    Login <i class="fas fa-arrow-right"></i>
	                                </button>
	                            </div>
	    
	                            <div class="link">
	                                <a href="{{route('register')}}">New User? Ragister</a>
	                            </div>
	                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--script-->
	@include('layouts.js')
</body>
</html>