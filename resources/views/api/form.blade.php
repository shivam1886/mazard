<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
	<meta name="keywords" content="mazard">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/backend/images/favicon-icon.png')}}">
	<!--css-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/css/bootstrap.min.css">
	<!--font awesome 4-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/fonts/fontawesome/css/all.min.css">
	<style type="text/css">
		body{
			background: #000;
		}

		button,input[type="submit"]{
			background: #85d7ff;
			border-radius: none;
			color:#fff;
			border: none;
			padding: 5px;
			display: inline;
			width: 100%;
		}
     	.form-control{
     		border-radius: none !important;
     	}
	</style>
</head>
<body>

  <div class="wrapper">
  	 <form class="form" action="{{url('api/submit/form')}}" method="post">
  	 	<input type="hidden" name="user_id" value="{{Request::get('user_id')}}">

  	 	@forelse($data['fields'] as $key => $field)

			@switch($field->type)
			    @case('text')
			  	 	<div class="form-group">
			  	 		<input type="text" name="{{strtolower($field->id)}}" placeholder="{{ucfirst($field->title)}}" value="" class="form-control" autocomplete="off">
			  	 	</div>
		        @break
		        @case('email')
					<div class="form-group">
					     <input type="email" name="{{strtolower($field->id)}}" placeholder="{{ucfirst($field->title)}}" value="" class="form-control" autocomplete="off">
					</div>
				@break
			    @case('phone')
					<div class="form-group">
					<input type="text" name="{{strtolower($field->id)}}" placeholder="{{ucfirst($field->title)}}" value="" class="form-control" autocomplete="off">
					</div>
				@break;
				@case('select')
					<div class="form-group">
					<select name="{{strtolower($field->id)}}" class="form-control">
						<option value="">{{$field->title}}</option>
						@forelse($field->field_options as $option)
						 <option value="{{$option}}">{{$option}}</option>
						@empty
						@endforelse
					</select>
					</div>
				@break;
			@endswitch
		@empty
		@endforelse
		<input type="submit" value="submit">
  	 </form>
  </div>  

</body>
 <!--script-->
<script type="text/javascript" src="{{asset('public/backend')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('public/backend')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('public/backend')}}/js/sweetalert.min.js"></script>
<style type="text/css">
	form{
		padding: 10px;
	}
</style>
</html>