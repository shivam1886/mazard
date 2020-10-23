	<!--top-strip-->
	<div class="top-strip">
		<div class="container">
			<div class="top-strip-inner">
				<div class="row">

					<div class="col-md-8 col-sm-6 col-xs-6">
						<div class="link">
							<a href="tel:8558441421"> <i class="fas fa-phone-alt"></i> +91 8558441421</a>
							<a href="mailto:Info.spenderscenter.com"> <i class="fas fa-envelope"></i> Info.spenderscenter.com</a>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="language">
							<span><i class="fas fa-language"></i> Language:</span>
							<select>
								<option>English</option>
								<option>Spenish</option>
								<option>Spenish</option>
							</select>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div><!--end-->

	<!--header-->
	<header>
		<div class="container">
			<div class="logo-nav clearfix">
				<a href="index.html" class="logo">
					<img src="{{asset('public/frontend')}}/images/logo.png" alt="logo">
				</a>

				<button class="toggle-menu">
					<span></span>
					<span></span>
					<span></span>
				</button>

				<nav>
					<ul>
						<li><a class="active" href="index.html">{{__('Home')}}</a></li>
						<li><a href="{{route('add.ad')}}">{{__('Post an add')}}</a></li>
						<li><a href="chat.html">{{__('Chat')}}</a></li>
						<li><a href="javascript:void(0);">{{__('Help')}}</a></li>
						<li><a href="javascript:void(0);">{{__('Contact Us')}}</a></li>
							@if(Auth::guest())
						<li>
							  <a href="{{route('login')}}" class="login-btn"><button>{{__('Login')}}/{{__('Ragister')}}</button></a>
						</li>
                            @else
						<li class="m-hide profile-icon">
							<div class="custom-dropdown">
								<div class="img dropdown-btn">
									<img src="{{asset('frontend')}}/images/profile.jpg">
								</div>
								<div class="c-dropdown">
									<ul>
										<li><a href="my_profile.html"><i class="fas fa-user"></i> {{__('My Profile')}}</a></li>
										<li><a href="{{route('my.ads')}}"><i class="fas fa-list-alt"></i> {{__('My Ads')}}</a></li>
										<li><a href="my_profile.html"><i class="fas fa-heart"></i> {{__('Favourite')}}</a></li>
										<li><a href="my_profile.html"><i class="fas fa-cog"></i> {{__('Setting')}}</a></li>
										<li><a href="login.html"><i class="fas fa-power-off"></i> {{__('Logout')}}</a></li>
									</ul>
								</div>
							</div>
						</li>
							@endif
					</ul>
				</nav>
			</div>
		</div>		
	</header><!--end-->