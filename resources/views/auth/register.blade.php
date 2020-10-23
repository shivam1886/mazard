<!DOCTYPE html>
<html>
<head>
	<title>{{__('Bikroykari App')}}</title>
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
			<a href="index.html"><i class="fas fa-arrow-left"></i> {{__('Back to Home')}}</a>
		</div>

		<div class="lg-wrapper">
			<div class="login-box clearfix">
				
				<div class="login-form">
					<div class="logo">
							<img src="{{asset('frontend')}}/images/logo.png">
					</div>
					<div class="heading">
						<h2>{{__('Register')}}</h2>
						<p>{{__('Enter All the details')}}</p>
					</div>
					<div class="body">
                       <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" autocomplete="on">
                            @csrf
						<div class="form-group {{ $errors->has('user_name') ? ' is-invalid' : '' }}">
	                        <input type="text" placeholder="{{__('User Name')}}" name="user_name" value="{{old('user_name')}}">
	                        @if ($errors->has('user_name'))
	                            <span class="invalid-feedback" role="alert">
	                                 <strong>{{ $errors->first('user_name') }}</strong>
	                            </span>
	                        @endif
	                    </div>
						<div class="form-group {{ $errors->has('phone_number') ? ' is-invalid' : '' }}">
	                        <input type="text" placeholder="{{__('Phone number')}}" name="phone_number" value="{{old('phone_number')}}">
	                        @if ($errors->has('phone_number'))
	                            <span class="invalid-feedback" role="alert">
	                                 <strong>{{ $errors->first('phone_number') }}</strong>
	                            </span>
	                        @endif
	                    </div>
						<div class="form-group {{ $errors->has('email_address') ? ' is-invalid' : '' }}">
	                        <input type="text" placeholder="{{__('Email address')}}" name="email_address" value="{{old('email_address')}}">
	                        @if ($errors->has('email_address'))
	                            <span class="invalid-feedback" role="alert">
	                                 <strong>{{ $errors->first('email_address') }}</strong>
	                            </span>
	                        @endif
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
							<input type="password" placeholder="Confirm Password" name="password_confirmation">
						</div>
						<div class="lgn-btn">
							<button>{{__('Sign Up')}} <i class="fas fa-arrow-right"></i></button>
						</div>
	
						<div class="link">
							<p>{{__('Already have an account?')}}' <a href="login.html"> {{__('Sign In')}}</a> </p>
						</div>
					</form>
					</div>
				</div>
	
			</div>
		</div>
	</section><!--end header-->

<!--script-->
 @include('layouts.js')
</body>
</html>