@extends('layouts.app')
@section('content')

	<div class="navcigation padding-top">
		<div class="container">
			<ul>
				<li><a href="{{route('home')}}">{{__('Home')}}</a></li>
				<li><a href="javascript:void(0)">{{__('Profile')}}</a></li>
			</ul>
		</div>
	</div>
	<!--post add-->
	<section class="profile-page">
		<div class="container">
			<div class="row">
				<!--profile-tabs-->
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="profile-tabs">
						<ul class="nav nav-tabs">
							<li><a class="active" data-toggle="tab" href="#MyProfile"><i class="fas fa-user"></i> {{__('My Profile')}}</a></li>
							<li><a data-toggle="tab" href="#MyAds"><i class="fas fa-list-alt"></i> {{__('My Ads')}}</a></li>
							<li><a data-toggle="tab" href="#Favourite"><i class="fas fa-list-alt"></i> {{__('Favourite')}}</a></li>
							<li><a data-toggle="tab" href="#Setting"><i class="fas fa-cog"></i> {{__('Setting')}}</a></li>
							<li><a href="login.html"><i class="fas fa-power-off"></i> {{__('Logout')}}</a></li>
						</ul>
					</div>
				</div><!--end-->

				<!--profile data-->
				<div class="col-md-9 col-sm-12 col-xs-12">
					<div class="profile-data">
						<div class="tab-content">

							<div id="MyProfile" class="tab-pane fade in active show">
								<div class="tab-data">
									<div class="header">
										<h2>My Profile</h2>
									</div>

									<div class="body">
										<div class="profile-inputs-wrapper">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="profile-inputs">
														<form action="{{route('update.profile')}}" method="post" id="update-profile-form">
															@csrf
															{{ method_field('PUT') }}
															<div class="profile">
																<label>
																	<img class="image-preview" onerror="profileImgError(this);" src="{{$data['user']->profile_image}}" alt="profile">
																	<input type="file" name="profile_image" accept="image/*" disabled>
																</label>
															</div>
					
															<div class="form-group">
																<input type="text" class="form-control" value="{{$data['user']->name}}" placeholder="{{__('Name')}}" name="name" readonly>
															</div>
															<div class="form-group">
																<input type="email" class="form-control" value="{{$data['user']->email}}" placeholder="{{__('Email')}}" name="email" readonly>
															</div>
															<div class="form-group">
																<input type="text" class="form-control" value="{{$data['user']->phone}}" placeholder="{{__('Phone')}}" name="phone" readonly>
															</div>
															<div class="form-group">
																<textarea name="address" class="form-control" placeholder="{{__('Address')}}" rows="2" readonly>{{$data['user']->address}}</textarea>
															</div>
															<div class="btn-group">
 															   <button class="btn2 btn-cancel">{{__('Cancel')}}</button>&nbsp;
 															   <button class="btn2 btn-update">{{__('Update')}}</button>&nbsp;
 															   <button class="btn2 btn-edit">{{__('Edit')}}</button>&nbsp;
															</div>
														</div>
												    </form>
												</div>

												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="ad-img">
														<img src="{{asset("frontend")}}/images/ad-img.png" alt="" class="img-fluid">
													</div>
												</div>
											</div>
											<div class="buttons">
												<button class="btn1" data-toggle="modal" data-target="#change-password">Change Password</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="MyAds" class="tab-pane fade">
								<div class="tab-data">
									<div class="header">
										<h2>My Ads</h2>
									</div>
									<div class="body">
										<div class="ads-list">
											<!--single-ads-->
											<div class="single-ads">
												<div class="delete-edit">
													<button class="delete"><i class="fas fa-trash"></i></button>
													<a class="edit" href="javascript:void(0);"><i class="fas fa-pen"></i></a>
												</div>
					
												<img class="featured-tag" src="{{asset("frontend")}}/images/featured.png" alt="">
					
												<a href="ad_details.html">
													<div class="img-txt clearfix">
														<div class="img">
															<img src="{{asset("frontend")}}/images/02.jpg" alt="ads image">
														</div>
														
														<div class="txt">
															<h2>LG Washing Machine Premium</h2>
															<div class="lc">
																<h3>
																	<i class="fa fa-map-marker-alt"></i>
																	<span>Location:</span>
																	Indore(M.P.)
																</h3>
																<h3>
																	<i class="fa fa-briefcase"></i>
																	<span>Category:</span>
																	Household
																	<label class="sale tag">Sale</label>
																</h3>
															</div>
					
															<p>Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod..</p>
					
															<label class="price">$150.00</label>
														</div>
													</div>
												</a>
											</div><!--end-->

											<!--single-ads-->
											<div class="single-ads">
												<div class="delete-edit">
													<button class="delete"><i class="fas fa-trash"></i></button>
													<a class="edit" href="javascript:void(0);"><i class="fas fa-pen"></i></a>
												</div>
					
												<img class="featured-tag" src="{{asset("frontend")}}/images/featured.png" alt="">
					
												<a href="ad_details.html">
													<div class="img-txt clearfix">
														<div class="img">
															<img src="{{asset("frontend")}}/images/02.jpg" alt="ads image">
														</div>
														
														<div class="txt">
															<h2>Cars With The Best Names Eve</h2>
															<div class="lc">
																<h3>
																	<i class="fa fa-map-marker-alt"></i>
																	<span>Location:</span>
																	Indore(M.P.)
																</h3>
																<h3>
																	<i class="fa fa-briefcase"></i>
																	<span>Category:</span>
																	Household
																	<label class="rent tag">Rent</label>
																</h3>
															</div>
					
															<p>Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod..</p>
					
															<label class="price">$100.00</label>
														</div>
													</div>
												</a>
											</div><!--end-->

											<!--single-ads-->
											<div class="single-ads">
												<div class="delete-edit">
													<button class="delete"><i class="fas fa-trash"></i></button>
													<a class="edit" href="javascript:void(0);"><i class="fas fa-pen"></i></a>
												</div>
					
												<img class="featured-tag" src="{{asset("frontend")}}/images/featured.png" alt="">
					
												<a href="ad_details.html">
													<div class="img-txt clearfix">
														<div class="img">
															<img src="{{asset("frontend")}}/images/02.jpg" alt="ads image">
														</div>
														
														<div class="txt">
															<h2>LG Washing Machine Premium</h2>
															<div class="lc">
																<h3>
																	<i class="fa fa-map-marker-alt"></i>
																	<span>Location:</span>
																	Indore(M.P.)
																</h3>
																<h3>
																	<i class="fa fa-briefcase"></i>
																	<span>Category:</span>
																	Household
																	<label class="sale tag">Sale</label>
																</h3>
															</div>
					
															<p>Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod..</p>
					
															<label class="price">$150.00</label>
														</div>
													</div>
												</a>
											</div><!--end-->

											<!--single-ads-->
											<div class="single-ads">
												<div class="delete-edit">
													<button class="delete"><i class="fas fa-trash"></i></button>
													<a class="edit" href="javascript:void(0);"><i class="fas fa-pen"></i></a>
												</div>
					
												<img class="featured-tag" src="{{asset("frontend")}}/images/featured.png" alt="">
					
												<a href="ad_details.html">
													<div class="img-txt clearfix">
														<div class="img">
															<img src="{{asset("frontend")}}/images/02.jpg" alt="ads image">
														</div>
														
														<div class="txt">
															<h2>Cars With The Best Names Eve</h2>
															<div class="lc">
																<h3>
																	<i class="fa fa-map-marker-alt"></i>
																	<span>Location:</span>
																	Indore(M.P.)
																</h3>
																<h3>
																	<i class="fa fa-briefcase"></i>
																	<span>Category:</span>
																	Household
																	<label class="rent tag">Rent</label>
																</h3>
															</div>
					
															<p>Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod..</p>
					
															<label class="price">$100.00</label>
														</div>
													</div>
												</a>
											</div><!--end-->
											
										</div>
									</div>
								</div>
							</div>

							<div id="Favourite" class="tab-pane fade">
								<div class="tab-data">
									<div class="header">
										<h2>Favourite</h2>
									</div>
									<div class="body">
										<div class="ads-list">
											<!--single-ads-->
											<div class="single-ads">
												<button class="like-btn">
													<label>
														<input type="checkbox" checked name="heart">
														<span><i class="fa fa-heart"></i></span>
													</label>
												</button>
					
												<img class="featured-tag" src="{{asset("frontend")}}/images/featured.png" alt="">
					
												<a href="ad_details.html">
													<div class="img-txt clearfix">
														<div class="img">
															<img src="{{asset("frontend")}}/images/02.jpg" alt="ads image">
														</div>
														
														<div class="txt">
															<h2>LG Washing Machine Premium</h2>
															<div class="lc">
																<h3>
																	<i class="fa fa-map-marker-alt"></i>
																	<span>Location:</span>
																	Indore(M.P.)
																</h3>
																<h3>
																	<i class="fa fa-briefcase"></i>
																	<span>Category:</span>
																	Household
																	<label class="sale tag">Sale</label>
																</h3>
															</div>
					
															<p>Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod..</p>
					
															<label class="price">$150.00</label>
														</div>
													</div>
												</a>
											</div><!--end-->
					
											<!--single-ads-->
											<div class="single-ads">
												<button class="like-btn">
													<label>
														<input type="checkbox" checked name="heart">
														<span><i class="fa fa-heart"></i></span>
													</label>
												</button>
					
												<a href="ad_details.html">
													<div class="img-txt clearfix">
														<div class="img">
															<img src="{{asset("frontend")}}/images/03.jpg" alt="ads image">
														</div>
														
														<div class="txt">
															<h2>People in lockdown told not to make impulsive </h2>
															<div class="lc">
																<h3>
																	<i class="fa fa-map-marker-alt"></i>
																	<span>Location:</span>
																	Indore(M.P.)
																</h3>
																<h3>
																	<i class="fa fa-briefcase"></i>
																	<span>Category:</span>
																	Household
																	<label class="rent tag">Rent</label>
																</h3>
															</div>
					
															<p>Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod..</p>
					
															<label class="price">$200.00</label>
														</div>
													</div>
												</a>
											</div><!--end-->
					
											<!--single-ads-->
											<div class="single-ads">
												<button class="like-btn">
													<label>
														<input type="checkbox" checked name="heart">
														<span><i class="fa fa-heart"></i></span>
													</label>
												</button>
					
												<img class="featured-tag" src="{{asset("frontend")}}/images/featured.png" alt="">
					
												<a href="ad_details.html">
													<div class="img-txt clearfix">
														<div class="img">
															<img src="{{asset("frontend")}}/images/02.jpg" alt="ads image">
														</div>
														
														<div class="txt">
															<h2>LG Washing Machine Premium</h2>
															<div class="lc">
																<h3>
																	<i class="fa fa-map-marker-alt"></i>
																	<span>Location:</span>
																	Indore(M.P.)
																</h3>
																<h3>
																	<i class="fa fa-briefcase"></i>
																	<span>Category:</span>
																	Household
																	<label class="sale tag">Sale</label>
																</h3>
															</div>
					
															<p>Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sconsectetur adipiscing elit, sed do eiusmod..</p>
					
															<label class="price">$150.00</label>
														</div>
													</div>
												</a>
											</div><!--end-->
									</div>
								</div>
							</div>

							<div id="Setting" class="tab-pane fade">
								<div class="tab-data">
									<div class="header">
										<h2>Setting</h2>
									</div>
									<div class="body">
										
									</div>
								</div>
							</div>

						</div>
					</div>
				</div><!--end-->
			</div>
		</div>
	</section><!--end-->

	<!-- Modal -->
    <div class="modal fade change-password-modal" id="change-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{__('Change Password')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{route('change.password')}}" id="change-password-form" method="post">
                @csrf
                {{ method_field('PUT') }}
	            <div class="modal-body">
	                <div class="change-pass">
	                        <div class="form-group">
	                            <label>{{__('Old Password')}}</label>
	                            <input type="password" name="old_password" class="form-control" placeholder="{{__('Old Password')}}">
	                        </div>
	                        <div class="form-group">
	                            <label>{{__('New Password')}}</label>
	                            <input type="password" name="new_password" class="form-control" placeholder="{{__('New Password')}}">
	                        </div>
	                        <div class="form-group">
	                            <label>{{__('Confirm New Password')}}</label>
	                            <input type="password" name="confirm_password" class="form-control" placeholder="{{__('Confirm New Password')}}">
	                        </div>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <button type="submit">{{__('Change Password')}}</button>
	                {{-- <input type="submit" name="{{__('Change Password')}}"> --}}
	            </div>
	         </form>
        </div>
        </div>
    </div>
    <!---end--->
    @endsection
    @push('css')
       <link rel="stylesheet" type="text/css" href="{{asset('/')}}css/image-uploader.min.css">
    @endpush
    @push('js')
       <script type="text/javascript">

	   	//Image Preview
	  $('input[name="profile_image"]').on('change',function(e){
	   	  tmppath = URL.createObjectURL(event.target.files[0]);
		  $('.image-preview').attr('src',tmppath);
	  });
        
        let updateForm  = $('#update-profile-form');
		let updateBtn   = updateForm.find('.btn-group .btn-update');
		let cancelBtn   = updateForm.find('.btn-group .btn-cancel');
		let editBtn     = updateForm.find('.btn-group .btn-edit');

		updateBtn.hide();cancelBtn.hide();

		$(editBtn).on('click',function(e){
			 e.preventDefault();
			 $(this).hide();
			 updateBtn.show();
			 cancelBtn.show();
			 updateForm.find('input,textarea').prop('readonly',false);
			 updateForm.find('input,textarea').prop('disabled',false);
			 updateForm.find('span.invalid-feedback').remove();
		});

		$(cancelBtn).on('click',function(e){
			 e.preventDefault();
			 $(this).hide();
			 updateBtn.hide();
			 editBtn.show();
			 updateForm[0].reset();
			 updateForm.find('input,textarea').prop('readonly',true);
			 updateForm.find('input,textarea').prop('disabled',true);
			 updateForm.find('span.invalid-feedback').remove();
		});

       	 $(updateForm).on('submit',function(e){
       	 	    e.preventDefault();
	       	 	var click = $(this);
				let form  = $(this);
	 		    let data  = new FormData(this);
				$.ajax({
					"headers":{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
				},
					'type':'POST',
					'url' : form.attr('action'),
					'data' : data,
					cache : false,
					contentType : false,
					processData : false,
				beforeSend: function() {

				},
				'success' : function(response){
					form.find('span.invalid-feedback').remove();
					form.find('.btn-group .btn-update').hide();
					form.find('.btn-group .btn-cancel').hide();
					form.find('.btn-group .btn-edit').show();
					form.find('input,textarea').prop('readonly',true);
					updateForm.find('input,textarea').prop('disabled',true);
					if(response.status == 'success'){

  					  toastr.success(response.message);
					}
					if(response.status == 'failed'){
					 toastr.error(response.message);
					}
					if(response.status == 'error'){
						 $.each(response.errors, function (key, val) {
						 click.find('[name='+key+']').after('<span class="invalid-feedback">'+val+'</span>');
						 });
					}
				},
				'error' : function(error){
					console.log(error);
				},
				complete: function() {

				},
				});
       	 });

       	       //Change Password
            $('body').on('submit','#change-password-form',function(e){
                e.preventDefault();
                var click = $(this);
                let form  = $(this);
                let data = form.serialize();
                $.ajax({
                    "headers":{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                },
                    'type':'PUT',
                    'url' : form.attr('action'),
                    'data' : data,
                beforeSend: function() {

                },
                'success' : function(response){
                    click.find('span.invalid-feedback').remove();
                    click.find('input[type="text"]').val('');
                    if(response.status == 'success'){
                    	  $('#change-password').modal('hide');
                          toastr.success(response.message);
                    }
                    if(response.status == 'failed'){
                         toastr.error(response.message);
                    }
                    if(response.status == 'error'){
                        $.each(response.errors, function (key, val) {
						 click.find('[name='+key+']').after('<span class="invalid-feedback">'+val+'</span>');
                        });
                    }
                },
                'error' : function(error){
                    console.log(error);
                },
                complete: function() {

                },
                });
              });

       </script>
    @endpush