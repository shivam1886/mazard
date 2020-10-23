@extends('layouts.app')
@section('content')

	<!--post add-->
	<section class="post-add-fisrt padding-top">
		<div class="container">
			<div class="navcigation">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="post_add.html">Ad Post</a></li>
				</ul>
			</div>

			<div class="wrapper">
				<div class="heading">
					<h2>Welcome User! Let's post an ad</h2>
					<p>Choose any option below</p>
				</div>

				<div class="post-ad-options">
					<div class="row">
						<!--single-option-->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-option">
								<div class="header">
									<img src="{{asset('frontend')}}/images/o1.png" alt="">
									<span>Sell something</span>
								</div>
								<div class="option">
									<ul>
										<li>
											<a href="{{route('ad.create')}}"">Sell an item or service</a>
											<i class="fas fa-angle-right"></i>
										</li>
										<li>
											<a href="{{route('ad.create')}}"">Offer a property for rent</a>
											<i class="fas fa-angle-right"></i>
										</li>
									</ul>
								</div>
							</div>
						</div><!--end-->

						<!--single-option-->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-option">
								<div class="header">
									<img src="{{asset('frontend')}}/images/o2.png" alt="">
									<span>Post a job vacancy</span>
								</div>
								<div class="option">
									<ul>
										<li>
											<a href="{{route('ad.create')}}"">Post a job in Bikroykari</a>
											<i class="fas fa-angle-right"></i>
										</li>
										<li>
											<a href="{{route('ad.create')}}"">Post a job overseas</a>
											<i class="fas fa-angle-right"></i>
										</li>
									</ul>
								</div>
							</div>
						</div><!--end-->

						<!--single-option-->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-option">
								<div class="header">
									<img src="{{asset('frontend')}}/images/o1.png" alt="">
									<span>Look for something</span>
								</div>
								<div class="option">
									<ul>
										<li>
											<a href="{{route('ad.create')}}"">Look for property to rent</a>
											<i class="fas fa-angle-right"></i>
										</li>
										<li>
											<a href="{{route('ad.create')}}"">Look for something to buy</a>
											<i class="fas fa-angle-right"></i>
										</li>
									</ul>
								</div>
							</div>
						</div><!--end-->
					</div>
				</div>
			</div>
		</div>
	</section> <!--end-->

	<div class="google-ads google-ads2">
		<div class="container">
			<img src="{{asset('frontend')}}/images/ad3.jpg" alt="google ad" class="img-fluid">
		</div>
	</div>
@endsection