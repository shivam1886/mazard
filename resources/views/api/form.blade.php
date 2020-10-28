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
</head>
<body>

  <div class="wrapper">
  	 <form class="form" action="{{url('api/submit/form')}}" method="post">
  	 	@forelse($data['fields'] as $key => $field)

			@switch($field->type)
			    @case('text')
			  	 	<div class="form-group">
			  	 		<input type="text" name="{{strtolower($field->id)}}" placeholder="{{ucfirst($field->title)}}" value="" class="form-control">
			  	 	</div>
		        @break
		        @case('email')
					<div class="form-group">
					     <input type="email" name="{{strtolower($field->id)}}" placeholder="{{ucfirst($field->title)}}" value="" class="form-control">
					</div>
				@break
			    @case('phone')
					<div class="form-group">
					<input type="text" name="{{strtolower($field->id)}}" placeholder="{{ucfirst($field->title)}}" value="" class="form-control">
					</div>
				@break;
			@endswitch
		@empty
		@endforelse
		<input type="submit" value="submit" class="btn btn-success">
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