@extends('backend.layouts.loggedInApp')
@section('content')
				<div class="main-body">
                    @include('backend.common.alert')
					<div class="inner-body">
						<!--header-->
						<div class="header">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="title">
										<!-- <h2>My Tenders</h2> -->
										<p class="navigation">
											<a href="{{route('admin.categories')}}">{{__('Category List')}}</a>
											<a href="Myuser-details.html">{{__('Category Details')}}</a>
										</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
								</div>
							</div>
						</div><!--END header-->

						<!--supplier-details-->
						<div class="supplier-profile-details Myuser-details">
								<div class="row">
									<!--supplier profile-->
									<div class="col-md-7 col-sm-7 col-xs-12">
										<form action="{{route('admin.category.update',$data['category']->id)}}" method="post" enctype="multipart/form-data">
										@csrf
										{{ method_field('PUT')}}
											<div class="profile-details">
												<div class="row">
													<div class="col-md-6">
														<div class="input-details">
															<div class="form-group">
															   <input class="form-control" type="text" placeholder="{{__('title in english')}}" name="english_title" value="{{old('title_en') ?? $data['category']->title}}" >
																@if ($errors->has('english_title'))
																   <span class="text-error">{{ $errors->first('english_title') }}</span>
																@endif
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-details">
															<div class="form-group">
																<input class="form-control" type="text" placeholder="{{__('title in bangla')}}" name="bangla_title" value="{{old('title_bn') ?? $data['category']->title_bn}}" >
																@if ($errors->has('bangla_title'))
																   <span class="text-error">{{ $errors->first('bangla_title') }}</span>
																@endif
															</div>
														</div>
													</div>
												</div>
												<div class="input-details">
													<div class="custom-upload-img">
													{{-- <span class="edit"><i class="fas fa-pencil-alt"></i></span> --}}
													<label>
														<img onerror="imageUpload(this)" src="{{$data['category']->image}}">
														<input type="file" name="image" accept="image/*">
	                                                	 @if ($errors->has('image'))
														     <span class="text-error">{{ $errors->first('image') }}</span>
														 @endif
													</label>
												</div>
												</div>
												<button class="btn-theme">{{__('Update')}}</button>
											</div>
										 </form>
									</div><!--END supplier profile-->
											<!--supplier profile-->
									<div class="col-md-5 col-sm-5 col-xs-12">
										<div class="sub-category-list">
												@forelse($data['category']->subCategories as $key => $subcategory)
													<div class="profile-details">
														<label class="btn-dlt-wrapper">
		    												<i class="fa fa-trash btn-dlt" data-parent-category-id="{{$data['category']->id}}" data-url="{{ route('admin.subcategory.remove',$subcategory->id)}}"></i>
														</label>
													<form action="{{route('admin.subcategory.update')}}" method="POST" class="update-subcategory-form">
														@csrf
														<input type="hidden" name="category_id" value="{{$subcategory->id}}">
														<input type="hidden" name="parent_category_id" value="{{$data['category']->id}}">
														<div class="row">
															<div class="col-md-6">
																<div class="input-details">
																	<div class="form-group">
																	   <input class="form-control" type="text" placeholder="{{__('title in english')}}" name="english_title" value="{{$subcategory->title}}" readonly>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="input-details">
																	<div class="form-group">
																		<input class="form-control" type="text" placeholder="{{__('title in bangla')}}" name="bangla_title" value="{{$subcategory->title_bn}}" readonly>
																	</div>
																</div>
															</div>
														</div>
														<div class="btn-wrapper">
															<button class="btn-theme btn-edit">{{__('Edit')}}</button>
           												    <button style="display: none;" class="btn-theme btn-reset">{{__('Reset')}}</button>
															<input style="display: none;"type="submit" class="btn-theme btn-update" value="{{__('Update')}}">
														</div>
													</form>
												</div>
												@empty
												@endforelse
										</div>
										<div class="profile-details">
											<form action="{{route('admin.subcategory.add')}}" method="POST" class="add-subcategory-form">
												@csrf
												<input type="hidden" name="parent_category_id" value="{{$data['category']->id}}">
												<div class="row">
													<div class="col-md-6">
														<div class="input-details">
															<div class="form-group">
															   <input class="form-control" type="text" placeholder="{{__('title in english')}}" name="english_title" value="" >
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-details">
															<div class="form-group">
																<input class="form-control" type="text" placeholder="{{__('title in bangla')}}" name="bangla_title" value="" >
															</div>
														</div>
													</div>
												</div>
												<button class="btn-theme">{{__('Add')}}</button>
											</form>
										</div>
									</div><!--END supplier profile-->
								</div>
							</form>
						</div><!--END supplier-details-->
					</div>
				</div>
@endsection
@push('css')
 <style type="text/css">
 </style>
@endpush
@push('js')
 <script type="text/javascript">

 	   //Image Preview
      $('input[type="file"]').on('change',function(event){
      // event.preventDefault();
       tmppath = URL.createObjectURL(event.target.files[0]);
       $('.custom-upload-img img').attr('src',tmppath);
      });

     // Get Subcategory
 	  let getSubCategories = function (){
					$.ajax(
					{
						"headers":{
						'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					},
						'type':'get',
						'url' : "{{route('admin.subcategory.list',$data['category']->id)}}",
					beforeSend: function() {

					},
					'success' : function(response){
              	        $('.sub-category-list').html(response);
					},
  					'error' : function(error){
					},
					complete: function() {
					},
					});
 	  }

 	   //Image Preview
      $('input[type="file"]').on('change',function(event){
      // event.preventDefault();
       tmppath = URL.createObjectURL(event.target.files[0]);
      });
      $('select[name="category"]').on('change',function(e){
      	  if(e.target.value != ''){ $('input[type="file"]').parents('.input-details').hide(); }else{ $('input[type="file"]').parents('.input-details').show();;}
      	   
      });

       $('body').on('submit','.add-subcategory-form',function(e){
	  	e.preventDefault();
	    var click = $(this);
		let form  = $(this);
	    let data = form.serialize();
		$.ajax({
			"headers":{
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
		},
			'type':'POST',
			'url' : form.attr('action'),
			'data' : data,
		beforeSend: function() {

		},
		'success' : function(response){
				click.find('.text-error').remove();
			if(response.status == 'success'){
			      swal("Success!",response.message, "success");
  				  click.find('input[type="text"]').val('');
			      getSubCategories();
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

       $('body').on('submit','.update-subcategory-form',function(e){
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
				click.find('span').remove();
				click.find('input[type="text"]').val('');
			if(response.status == 'success'){
			      swal("Success!",response.message, "success");
			      getSubCategories();
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

       $('body').on('click','.btn-reset',function(e){
         	 e.preventDefault();
         	 let form = $(this).parents('.update-subcategory-form');             
                 form[0].reset();
       });

       $('body').on('click','.btn-edit',function(e){
       	  e.preventDefault();
       	  $(this).hide();
       	  let form = $(this).parents('.update-subcategory-form');
       	      form.find('input[type="text"]').removeAttr('readonly');
       	      form.find('.btn-update').show();
       	      form.find('.btn-reset').show();
       });

         $('body').on('click','.btn-dlt',function(e){
		  	  var url = $(this).attr('data-url');
	          var parentCategoryId = $(this).attr('data-parent-category-id');
	          var data = { parent_category_id : parentCategoryId };
			  swal({
			  title: "{{__('Are you sure?')}}",
			  text: "{{__('Once deleted, you will not be able to recover this sub category!')}}",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			 })
			 .then((willDelete) => {
				if(!willDelete){
					return false;
				}
					$.ajax({
						"headers":{
						'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					},
						'type':'DELETE',
						'url' : url,
						'data' : data,
					beforeSend: function() {
					},
					'success' : function(response){
						if(response.status == 'success'){
							swal("Success!",response.message, "success");
   					        getSubCategories();
						}
						if(response.status == 'failed'){
							swal("Failed!",response.message, "error");
						}
					},
					'error' : function(error){
					},
					complete: function() {
					},
					});
			 });
	     });

 </script>
@endpush

