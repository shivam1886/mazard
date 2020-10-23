<!DOCTYPE html>
<html>
<head>
	<title>Bikroykari App</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="">
	<meta name="author" content="Codemeg Solution Pvt. Ltd., info@codemeg.com">
	<meta name="url" content="http://codemeg.com">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
	<!--css-->
    @include('layouts.css')
</head>
<body>
	<!--header start-->
	<section class="login-page login clearfix">
		<div class="back-home">
			<a href="{{route('home')}}"><i class="fas fa-arrow-left"></i> {{__('Back to Home')}}</a>
		</div>

		<div class="lg-wrapper">
			<div class="login-box clearfix">
				<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" id="login-form">
	                        @csrf
					<div class="login-form">
						<div class="logo">
							<img src="{{asset('frontend')}}/images/logo.png">
						</div>
						<div class="heading">
							<h2>{{__('Login')}}</h2>
							<p>{{__('Welcome Back..!!')}}</p>
						</div>
						<div class="body">
						  <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
	                                <input type="text" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autofocus>
	                                 @if ($errors->has('email'))
	                                     <span class="invalid-feedback text-error" role="alert">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                     </span>
                                     @endif
	                            </div>
	                            <div class="form-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
	                                <input type="password" placeholder="Enter Password" name="password" required>
	                                @if ($errors->has('password'))
	                                    <span class="invalid-feedback  text-error" role="alert">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
                                     @endif
	                            </div>
		
							<div class="frgt-pass">
								<a href="forget_password.html">{{__('Forgot Password?')}}</a>
							</div>
		
							<div class="lgn-btn">
								<a href="{{route('login')}}"><button>{{__('Login')}}<i class="fas fa-arrow-right"></i></button></a>
							</div>
		
							<div class="link">
								<p>{{__('Don’t have an account?')}}' <a href="{{route('register')}}"> {{__('Sign Up')}}</a> </p>
							</div>
						</div>
					</div>
				</form>
	
			</div>
		</div>
	</section><!--end header-->
@include('layouts.js')
</body>
</html>