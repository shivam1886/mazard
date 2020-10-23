<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ config('app.name', 'Laravel') }} | Register</title>
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

	<section class="login-register signup">
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
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" autocomplete="on">
                            @csrf
                            <div class="input-fields">
                                <div class="header">
                                    <h2> Register</h2>
                                    <p>Submit all Details</p>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group {{ $errors->has('first_name') ? ' is-invalid' : '' }}">
                                            <input type="text" placeholder="First Name" name="first_name" value="{{old('first_name')}}">
                                            @if ($errors->has('first_name'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('first_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group {{ $errors->has('last_name') ? ' is-invalid' : '' }}">
                                            <input type="text" placeholder="Last Name" name="last_name" value="{{old('last_name')}}">
                                            @if ($errors->has('last_name'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                    <input type="text" placeholder="Enter Email" name="email" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group {{ $errors->has('city') ? ' is-invalid' : '' }}">
                                            <input type="text" placeholder="City" name="city" value="{{old('city')}}">
                                            @if ($errors->has('city'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('city') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group {{ $errors->has('country') ? ' is-invalid' : '' }}">
                                            <input type="text" placeholder="Country" name="country" value="{{old('country')}}">
                                            @if ($errors->has('country'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('country') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group {{ $errors->has('date') ? ' is-invalid' : '' }}">
                                            <input type="date" placeholder="Date Of birth" name="date" value="{{old('date')}}">
                                            @if ($errors->has('date'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('date') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group {{ $errors->has('profession') ? ' is-invalid' : '' }}">
                                            <input type="text" placeholder="Profession" name="profession" value="{{old('profession')}}">
                                            @if ($errors->has('date'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('date') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                    <input type="password" placeholder="Password" name="password" autocomplete="off">
                                    @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                     @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Confirm Password" name="password_confirmation" >
                                </div>
        
                                <div class="forgot-btn">
                                    <button class="btn">
                                        Sign Up <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
        
                                <div class="link">
                                    <a href="{{route('login')}}">Already Member? Login</a>
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