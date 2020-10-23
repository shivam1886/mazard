@extends('layouts.app')
@section('content')

	<div class="navcigation padding-top">
		<div class="container">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="post_ad_form.html">Ad Post Form</a></li>
			</ul>
		</div>
	</div>

	<!--post add-->
	<section class="post-ad-form">
		<div class="container">

			<div class="row">
				<!--left form-->
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="left-form-details">
						<div class="heading">
							<h2>{{__('Sell an item or service')}}<i class="fa fa-times"></i></h2>
							<p>{{__('Provide more information about your item and upload good qualit')}}</p>
						</div>

					 <form action="{{route('ad.store')}}" method="post" id="create-ad-form" enctype="multipart/form-data">
					   	@csrf
						<div class="body">
							<h2 class="heading">{{__('What is your listing based on?')}}</h2>
							<div class="two-row">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>{{__('Category')}}*</label>
											<select name="category" class="form-control">
											<option value="">{{__('Choose Category')}}</option>
											@forelse($data['categories'] as $category)
											  	   <option value="{{$category->id}}">{{$category->title}}</option>
											@empty
											@endforelse
											</select>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label>{{__('Sub Category')}}*</label>
											<select name="sub_category" class="form-control">
									        </select>
									     </div>
								     </div>
									<div class="row">
										<div class="col-md-6 col-sm-6">
											<div class="form-group">
												<label>{{__('Select City or Division')}}</label>
												<select name="city" class="form-control">
													  <option value="">{{__('Choose City')}}</option>
													@forelse($data['cities'] as $city)
													  <option value="{{$city->id}}">{{$city->title}}</option>
													@empty
													@endforelse
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="form-group">
												<label>{{__('Select a local area within Khulna')}}</label>
												<select name="local_area" class="form-control">
												</select>
											</div>
										</div>
									</div>
							   </div>
								<div class="input-details">
									<!-- <h2>Condition</h2> -->

									<div class="form-group">
										<label>{{__('Title')}} *</label>
										<input type="text" class="form-control" name="title" placeholder="{{__('Keep its short')}}">
									</div>

									<div class="form-group">
										<label>{{__('Description')}}*</label>
										<textarea class="form-control" rows="4" name="description" placeholder="{{__('More Details.. More Intrested Buyers')}}"></textarea>
									</div>

									<div class="form-group">
										<label>{{__('Price')}}*</label>
										<input type="text" name="price" class="form-control" placeholder="{{__('Product Price')}}">
									</div>
								</div>
						   </div>
							<!--ad type-->
							<div class="ad-type">
								<div class="heading">
									<h2>{{__('Select your ad type')}} ({{__('Optional')}})</h2>
									<p>{{__('Upgrade your ad to get more views & more replies')}}</p>
								</div>

								<div class="ad-plans">
									<div class="row">
										<!--single plan-->
										<div class="col-md-4 col-sm-12 col-xs-12">
											<div class="single-plan">
												<div class="heading">
													<img src="{{asset('frontend')}}/images/red.png" alt="">
													<div class="txt">
														<span> Clasic</span>
														<h4>$10</h4>
													</div>
												</div>
												<div class="body">
													<ul>
														<li>7days top rank</li>
														<li>Lorem Ipsum</li>
														<li>7days top rank copy</li>
													</ul>
													
													<button data-toggle="modal" data-target="#plan-pay">Choose</button>
												</div>
											</div>
										</div>
										<!--end-->

										<!--single plan-->
										<div class="col-md-4 col-sm-12 col-xs-12">
											<div class="single-plan">
												<div class="heading">
													<img src="{{asset('frontend')}}/images/green.png" alt="">
													<div class="txt">
														<span> Plus</span>
														<h4>$50</h4>
													</div>
												</div>
												<div class="body">
													<ul>
														<li>7days top rank</li>
														<li>Lorem Ipsum</li>
														<li>7days top rank copy</li>
													</ul>
													
													<button data-toggle="modal" data-target="#plan-pay">Choose</button>
												</div>
											</div>
										</div>
										<!--end-->

										<!--single plan-->
										<div class="col-md-4 col-sm-12 col-xs-12">
											<div class="single-plan">
												<div class="heading">
													<img src="{{asset('frontend')}}/images/blue.png" alt="">
													<div class="txt">
														<span> Premium</span>
														<h4>$100</h4>
													</div>
												</div>
												<div class="body">
													<ul>
														<li>7days top rank</li>
														<li>Lorem Ipsum</li>
														<li>7days top rank copy</li>
													</ul>
													
													<button data-toggle="modal" data-target="#plan-pay">Choose</button>
												</div>
											</div>
										</div>
										<!--end-->

									</div>
								</div>
							</div>
							<!--end-->
							 <div class="drop-choose-img">
								<div class="drag-upload-img"></div>
							</div>
							<div class="add-btn">
								<button type="submit">Add Post</button>
							</div>
					    </div>
				    </form>
				</div><!--right-->

			</div>
		</div>
	</section> <!--end-->

	<div class="google-ads google-ads2">
		<div class="container">
			<img src="{{asset('frontend')}}/images/ad3.jpg" alt="google ad" class="img-fluid">
		</div>
	</div>
@endsection
@push('css')
 <link rel="stylesheet" type="text/css" href="{{asset('/')}}css/image-uploader.min.css">
@endpush
@push('js')
 <script type="text/javascript" src="{{asset('/')}}js/image-uploader.min.js"></script>
 <script type="text/javascript">
       
 	  // Get SubCategories
  	    var getSubCategories = function(id,callBack){
					$.ajax(
					{
						"headers":{
						'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					},
						'type':'get',
						'url' : '{{url('ajax/sub/category')}}' + '/' + id,
					beforeSend: function() {

					},
					'success' : function(response){
                        callBack(response);
					},
  					'error' : function(error){
					},
					complete: function() {
					},
					});
  	    }

  	    // Get SubCategories
  	    var getLocalAreas = function(id,callBack){
					$.ajax(
					{
						"headers":{
						'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					},
						'type':'get',
						'url' : '{{url('ajax/city/area')}}' + '/' + id,
					beforeSend: function() {

					},
					'success' : function(response){
                        callBack(response);
					},
  					'error' : function(error){
					},
					complete: function() {
					},
					});
  	    }
   
     $('select[name="category"]').on('change',function(e){
     	  e.preventDefault();
     	 getSubCategories(e.target.value,function(resnponse){
     	 	 if(resnponse.status == 'success'){
     	 	 	let option = '';
     	 	 	    resnponse.data.map(function(subCategory,index){
     	 	 	    	if(index == 0){
                          option += '<option value="">Choose Sub-Category</option>';
     	 	 	    	}
                        option += `<option value="${subCategory.id}">${subCategory.title}</option>`;
     	 	 	    });
     	 	 	   $('select[name="sub_category"]').html(option);
     	 	 }

     	 	 if(resnponse.status == 'failed'){
     	 	 	
     	 	 }
     	 });
     });

     $('select[name="city"]').on('change',function(e){
     	 e.preventDefault();
     	 getLocalAreas(e.target.value,function(resnponse){
     	 	console.log(resnponse);
     	 	 if(resnponse.status == 'success'){
     	 	 	let option = '';
     	 	 	    resnponse.data.map(function(localArea,index){
     	 	 	    	if(index == 0){
                          option += '<option value="">Choose Local Area</option>';
     	 	 	    	}
                        option += `<option value="${localArea.id}">${localArea.title}</option>`;
     	 	 	    });
     	 	 	   $('select[name="local_area"]').html(option);
     	 	 }

     	 	 if(resnponse.status == 'failed'){
     	 	 	
     	 	 }
     	 });
      });

     //Create Form
     $('#create-ad-form').on('submit',function(e){
     	e.preventDefault();
     		let click = $(this);
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
				if(response.status == 'success'){
   			      swal("Success!",response.message, "success");
   	 		      setTimeout(function(){ location.reload(); }, 1000);
				}
				if(response.status == 'failed'){
				  swal("Failed!",response.message, "error");
				}
				if(response.status == 'error'){
				 $.each(response.errors, function (key, val) {
				    click.find('[name='+key+']').after('<span class="text-error">'+val+'</span>');
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

     $('.drag-upload-img').imageUploader({
			preloaded: '',
			imagesInputName: 'image',
			preloadedInputName: 'old',
			maxSize: 2 * 1024 * 1024,
			maxFiles: 10
     });



 </script>
@endpush